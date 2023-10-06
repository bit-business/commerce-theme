<template>
  <div>
    <Head :title="$page.props.name" />

    <div class="hzuts-gallery-screen-desktop">
      <img
      class="hzuts-gallery-screen-desktop-child"
      alt=""
      src="/storage/slike/frame-505.svg"
    />
    
      <div class="image-gallery">

        <div class="folders-container">
          <img class="lijevipointer-icon" @click="moveToLeftFolder" alt="" src="/storage/slike/lijevipointer.svg" />
    
    
    <div class="folder-items-container">
        <div v-for="folder in folders" :key="folder" :class="['folder-item', { active: currentFolder === folder }]" class="folder-item" @click="selectFolder(folder)">
            {{ folder }}
        </div>
    </div>
    <img class="desnipointer-icon" alt="" @click="moveToRightFolder" src="/storage/slike/desnipointer.svg" />
</div>



<!-- Loading Overlay -->
<div v-if="isLoading" class="loading-overlay">
  <div class="loader"></div>
</div>
<!-- Loading Overlay -->




<!-- Current Folder Title -->
<div class="folder-bar">
    <div class="folder-title">{{ currentFolder }}</div>
</div>


<masonry-wall :items="images" :ssr-columns="4" :min-columns="4" :max-columns="8" :column-width="300" :gap="16">
    <template v-slot:default="slotProps">
        <div class="image-container" @click="showFullscreen(slotProps.item.original)">
            <img :src="slotProps.item.thumbnail" class="image-preview" loading="lazy">

            <div class="overlay">
                  <svg width="32"  class="eye-icon" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M31.7966 15.3772C31.5108 14.9861 24.6993 5.80176 15.9998 5.80176C7.30039 5.80176 0.488626 14.9861 0.203063 15.3768C-0.0676876 15.7478 -0.0676876 16.251 0.203063 16.622C0.488626 17.013 7.30039 26.1974 15.9998 26.1974C24.6993 26.1974 31.5108 17.013 31.7966 16.6223C32.0678 16.2513 32.0678 15.7478 31.7966 15.3772ZM15.9998 24.0875C9.59177 24.0875 4.0417 17.9917 2.39875 15.9988C4.03957 14.0043 9.57802 7.91164 15.9998 7.91164C22.4076 7.91164 27.9573 14.0064 29.6009 16.0003C27.9601 17.9948 22.4217 24.0875 15.9998 24.0875Z" fill="white"/>
<path d="M15.9999 9.66992C12.5097 9.66992 9.67017 12.5095 9.67017 15.9996C9.67017 19.4898 12.5097 22.3293 15.9999 22.3293C19.49 22.3293 22.3296 19.4898 22.3296 15.9996C22.3296 12.5095 19.49 9.66992 15.9999 9.66992ZM15.9999 20.2194C13.673 20.2194 11.7801 18.3264 11.7801 15.9996C11.7801 13.6728 13.673 11.7799 15.9999 11.7799C18.3267 11.7799 20.2196 13.6728 20.2196 15.9996C20.2196 18.3264 18.3267 20.2194 15.9999 20.2194Z" fill="white"/>
</svg>                
            
            </div>
        </div>
    </template>
</masonry-wall>


      </div>
  </div>

      

       

   
    </div>




</template>

<script>

import CarouselSingle from '../components/carousel-single/carousel.vue'
import CarouselItemSingle from '../components/carousel-single/carousel-item.vue'

import MasonryWall from "@yeger/vue2-masonry-wall";
import firebase from "firebase/app";
import "firebase/storage";


const firebaseConfig = {
  apiKey: process.env.MIX_FIREBASE_API_KEY,
  authDomain: process.env.MIX_FIREBASE_AUTH_DOMAIN,
  projectId: process.env.MIX_FIREBASE_PROJECT_ID,
  storageBucket: process.env.MIX_FIREBASE_STORAGE_BUCKET,
  messagingSenderId: process.env.MIX_FIREBASE_MESSAGE_SEENDER,
  appId: process.env.MIX_FIREBASE_APP_ID,
  measurementId: process.env.MIX_FIREBASE_MEASUREMENT_ID
};
if (!firebase.apps.length) {
  firebase.initializeApp(firebaseConfig);
}


import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";



export default {
  layout: [appLayout, galerijaLayout],
  components: {
    Link,
    Head,
    MasonryWall,
    CarouselSingle,
    CarouselItemSingle
  },
  data() {
    return {
      isLoading: false,

      fullscreenImageIndex: null,

      unapprovedUsers: [],
      firebaseInstance: null,
      folders: [],
        
      currentFolder: 'INTERSKI Finska',


      page: 1,
      images: [],
      paginator: {
        total: 1,
        perPage: 30,
      },
      


      banner: {
        mainBanner: {
          data: { banner1: {
              data: null
            },
         
          
          }
        },
        subBanner: {
          data: {
            subBanner1: {
              data: null
            },
            subBanner2: {
              data: null
            },
          }
        }
      }
    


    }
  },
  computed: {
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      user(state) {
        return state.user
      },
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      }
    }),

  },
  mounted() {
    console.log("TEST Firebase instance in mounted:", this.$firebase);

    this.fetchFolders();
    this.getFiles();


    this.firebaseInstance = this.$firebase;


 
  },
  watch: {
    currentFolder: function(newVal, oldVal) {
        this.selectFolder(newVal);
    },

    firebaseInstance(newVal) {
      if (newVal) {
        // Firebase is now available, perform your operations here
        const firebaseInstance = this.$firebase;  // Accessing Firebase instance
    const storageRef = firebaseInstance.storage().ref();
    console.log("Firebase from Vue:", this.$firebase);

        // ... 
      }
    }


},


  methods: {

    async fetchImagesFromFirebase() {
  this.isLoading = true;
  const storageRef = firebase.storage().ref();
 // const storageRef = this.$firebase.storage().ref();
  const galleryFolderRef = storageRef.child('galerija/' + this.currentFolder);

  try {
    let imageData = [];
    const files = await galleryFolderRef.listAll();

    for (let imageRef of files.items) {
      const originalUrl = await imageRef.getDownloadURL();
      const thumbnailUrl = await storageRef.child('galerija/' + this.currentFolder + '/thumbnails/' + imageRef.name).getDownloadURL();
      
      imageData.push({
        original: originalUrl,
        thumbnail: thumbnailUrl
      });
    }

    this.images = imageData;
  } catch (error) {
    console.error("Error fetching images:", error);
  } finally {
    setTimeout(() => {
      this.isLoading = false;
    }, 10);
  }
},




    moveToLeftFolder() {
    const currentIndex = this.folders.indexOf(this.currentFolder);
    if (currentIndex === 0) {
        this.currentFolder = this.folders[this.folders.length - 1]; // Set to the last folder
    } else {
        this.currentFolder = this.folders[currentIndex - 1];
    }
    this.selectFolder(this.currentFolder);
},

moveToRightFolder() {
    const currentIndex = this.folders.indexOf(this.currentFolder);
    if (currentIndex === this.folders.length - 1) {
        this.currentFolder = this.folders[0]; // Set to the first folder
    } else {
        this.currentFolder = this.folders[currentIndex + 1];
    }
    this.selectFolder(this.currentFolder);
},




    selectFolder(folder) {
        this.currentFolder = folder;
        this.getFiles(); // to reload the files based on the selected folder
    },

    async fetchFolders() {
    //  const storageRef = this.$firebase.storage().ref();
    const storageRef = firebase.storage().ref();
  const rootRef = storageRef.child('galerija');  // Assuming 'galerija' is your root folder

  try {
    const folders = await rootRef.listAll();
    this.folders = folders.prefixes.map(prefix => prefix.name);
  } catch (error) {
    console.error("Error fetching folders:", error);
  }
},


    /* stari za lokalno foldere nije radio potpuno
    fetchFolders() {
      this.$api.skijasiFile.getFolderNames({
  directory: ('/') 
})
    .then(response => {
        this.folders = response
        console.log("Response from server folderi ucitavanje:", this.folders);
    })
    .catch(error => {
        console.error("Error fetching folders:", error);
    });
},
*/


async getFiles() {
  this.fetchImagesFromFirebase();
  const storageRef = firebase.storage().ref();
  const folderPath = 'galerija/INTERSKI Argentina'; // Path to your Firebase Storage folder
  
  try {
    const items = await storageRef.child(folderPath).listAll();
    const downloadURLs = await Promise.all(
      items.items.map(async (item) => {
        return item.getDownloadURL();
      })
    );
    this.images = downloadURLs;
  } catch (error) {
    console.error('Error fetching images:', error);
  }
},


/* getfiles preko lmf-a sa servera a ne firebasea
    getFiles() {
  
    let folderIndex = this.folders.indexOf(this.currentFolder);
if (folderIndex < 0) {
    folderIndex = 0;
}
console.log('Current Folder Index:', folderIndex);

        this.$api.skijasiFile
        .browseUsingLfm({
          workingDir: "/" + folderIndex,
            type: "galerija",
            sort_type: 'time',
            page: this.page,
          })
          .then((res) => {

            
            console.log("Response from server:", res.data);

            this.images = res.data.items.map(item => item.url);

            console.log("Response from server2:", this.images);

        
          })
          .catch((error) => {
            console.log(error);
          })
          .finally(() => {
          //  this.$closeLoader();
          });


     
      
    },
*/
  
showFullscreen(imageSrc) {
  this.fullscreenImageIndex = this.images.findIndex(image => image.original === imageSrc);
  
  const overlay = document.createElement('div');
  overlay.id = 'fullscreen-overlay';
  overlay.style.position = 'fixed';
  overlay.style.top = '0';
  overlay.style.left = '0';
  overlay.style.width = '100%';
  overlay.style.height = '100%';
  overlay.style.backgroundColor = 'rgba(0,0,0,0.9)';
  overlay.style.display = 'flex';
  overlay.style.justifyContent = 'center';
  overlay.style.alignItems = 'center';
  overlay.style.zIndex = '10000';

  const img = new Image();
  img.src = imageSrc;
  overlay.appendChild(img);

  const leftArrow = document.createElement('button');
  leftArrow.innerHTML = '&lt;';
  leftArrow.onclick = () => this.showPreviousImage();
  leftArrow.style.position = 'absolute';
  leftArrow.style.left = '10px';
  leftArrow.style.top = '50%';
  leftArrow.style.transform = 'translateY(-50%) scaleY(1.7)';  
  leftArrow.style.fontSize = '3em';  
leftArrow.style.lineHeight = '1'; 
  leftArrow.style.color = 'white';
  leftArrow.style.background = 'none';
  leftArrow.style.border = 'none';
  leftArrow.style.cursor = 'pointer';

  overlay.appendChild(leftArrow);

  const rightArrow = document.createElement('button');
  rightArrow.innerHTML = '&gt;';
  rightArrow.onclick = () => this.showNextImage();
  rightArrow.style.position = 'absolute';
  rightArrow.style.right = '10px';
  rightArrow.style.top = '50%';
  rightArrow.style.transform = 'translateY(-50%) scaleY(1.7)';  // Stretch the arrow vertically
  rightArrow.style.fontSize = '3em';  
  rightArrow.style.lineHeight = '1'; 
  rightArrow.style.color = 'white';
  rightArrow.style.background = 'none';
  rightArrow.style.border = 'none';
  rightArrow.style.cursor = 'pointer';
  overlay.appendChild(rightArrow);

  document.body.appendChild(overlay);
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      document.body.removeChild(overlay);
      this.fullscreenImageIndex = null;
    }
 });


 // Create the "X" button
 const closeButton = document.createElement('button');
    closeButton.innerHTML = 'x';
    closeButton.onclick = () => {
        document.body.removeChild(overlay);
    };
    closeButton.style.position = 'absolute';
    closeButton.style.top = '20px';
    closeButton.style.right = '20px';
    closeButton.style.fontSize = '1.4em';
    closeButton.style.transform = 'translateY(-50%) scaleX(1.4)';  // Stretch the arrow vertically
    closeButton.style.color = 'white';
    closeButton.style.background = 'none';
    closeButton.style.border = 'none';
    closeButton.style.cursor = 'pointer';
    closeButton.style.zIndex = '10';  // Ensure it's above other elements
    overlay.appendChild(closeButton);

    document.body.appendChild(overlay);
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) {
            document.body.removeChild(overlay);
        }
    });




},



showNextImage() {
    if (this.fullscreenImageIndex < this.images.length - 1) {
      this.fullscreenImageIndex++;
    } else {
      this.fullscreenImageIndex = 0; // loop back to the first image
    }
    const overlay = document.getElementById('fullscreen-overlay');
    const img = overlay.querySelector('img');
    img.src = this.images[this.fullscreenImageIndex].original;
  },

  showPreviousImage() {
    if (this.fullscreenImageIndex > 0) {
      this.fullscreenImageIndex--;
    } else {
      this.fullscreenImageIndex = this.images.length - 1; // loop back to the last image
    }
    const overlay = document.getElementById('fullscreen-overlay');
    const img = overlay.querySelector('img');
    img.src = this.images[this.fullscreenImageIndex].original;
  },

  


    logout() {
      this.$api.skijasiAuth
        .logout()
        .then(res => {
        })
        .catch(err => {
        })
        .finally(() => {
          this.$store.dispatch("SET_IS_AUTHENTICATED", false);
          this.$store.dispatch("SET_NOTIFICATIONS", {
            data: [],
            total: null,
            currentPage: 1,
            perPage: 10
          });
          this.$store.dispatch("SET_USER", {
            name: null,
            email: null,
            additionalInfo: null,
            avatar: null,
            emailVerifiedAt: null,
            password: null,
            rememberToken: null,
            createdAt: null,
            updatedAt: null,

   
          });
          this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
        })
    }
  }
}
</script>

<style scoped>
  .navbar {
    padding-top: 0.15rem; 
    padding-bottom: 3.75rem; 
  }

  .hzuts-gallery-screen-desktop-child {
    position: absolute;
    height: 78.13%;
    width: 55.56%;
    top: 10.94%;
    right: 22.22%;
    bottom: 10.94%;
    left: 22.22%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 0;
  }

  .hzuts-gallery-screen-desktop-child {
bottom: 3%;
  }


  .lijevipointer-icon {
    position: absolute;
    top: -1rem;
    left: 5.19rem;
    width: 3.15rem;
    height: 3.15rem;
  }
  .desnipointer-icon {
    position: absolute;
    top: -1rem;
    right: 5.19rem;
    width: 3.15rem;
    height: 3.15rem;
  }
  .lijevipointer-parent {
    position: absolute;
    height: 5.86%;
    width: 103.33%;
    top: 9.18%;
    right: -1.74%;
    bottom: 84.96%;
    left: -1.6%;
  }



  
.image-gallery {
  /* Gallery styling */
  padding-top: 3%;
}
.folder-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px; /* adjust as needed */
    margin-bottom: 25px; 
}


.folder-title {
    font-size: 28px; /* adjust as needed */
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 10px; 
    
}


.image-preview {
    width: 100%;
    height: auto;
    display: block;
    margin: 0 auto; /* center the image */
}

.image-container {
  position: relative;
}

.image-preview {
  width: 100%;
  height: auto;
  display: block;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #03A9F4CC;
  opacity: 80%;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease-in-out; /* smooth fade-in effect */
}

.eye-icon {
  width: 32px;
  height: 32px;
}

.image-container:hover .overlay {
  opacity: 1;
}

.folder-item.active {
    color: #03A9F4CC;
}


.folder-item:hover {
color: #03A9F4CC;
}

.folders-container {
  display: flex;
    justify-content: center; /* Horizontally center the children */
    align-items: center;     /* Vertically center the children */
    width: 100%;             /* Take full width of the parent */
    position: relative;
    margin-bottom: 25px; 
    margin-top: 70px; 
}

.left-pointer, .right-pointer {
    position: absolute; /* Takes the pointers out of the normal flow */
    top: 50%;  /* Vertically centers the pointers */
    transform: translateY(-50%); 
    width: 40px;  /* Adjusted width */
    height: 40px; /* Adjusted height to match width */
    font-size: 24px; 
    align-items: center;
    justify-content: center;
    background-color: black; 
    opacity: 40%;
    display: flex;  
    border-radius: 50%; /* Makes it a circle */
    padding: 10px; /* Adjusts the size of the circle */
    cursor: pointer; /* Indicates interactivity */
    z-index: 2; /* Ensure pointers are above other elements */
}

.left-pointer {
    left: 3%; /* Positions at the left end */
    color: white;
/* adjust as needed */
    font-weight: 500;
}

.right-pointer {
    right: 3%; /* Positions at the right end */
    color: white;
 /* adjust as needed */
    font-weight: 500;
}


.folder-item {
  display: inline-block;  
    margin: 0 10px;  /* Adjust as necessary */
    cursor: pointer; /* Makes it clear that the folder can be clicked */
    font-size: 16px; /* adjust as needed */
    font-weight: 800;
    text-transform: capitalize;
}

.folder-items-container {
  display: flex;
    flex-direction: row;       /* Items displayed in a row */
    overflow-x: auto;          /* Allow horizontal scroll */
    overflow-y: hidden;        /* Prevent vertical scroll */
    white-space: nowrap;       /* Prevents wrapping of items to the next line */
    gap: 17px;          /* Padding top and bottom (optional) */
}
.folder-items-container::-webkit-scrollbar {
    display: none;  /* Hide scrollbar for Chrome, Safari, and Opera */
}

.folder-items-container {
    -ms-overflow-style: none;  /* Hide scrollbar for IE and Edge */
}


.loading-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader {
  border: 8px solid #f3f3f3;
  border-top: 8px solid #3498db;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}



</style>