
<template>
<header class="navigation-bar" :class="{'transparent-bg': isHomePage}">
    <nav class="navbartekstoviframe">
      <div class="navbartekstoviframe-inner">
        <div class="poetna-parent">
       
      <Link class="poetna"  :class="{ 'active-link': isRouteActive('/web') }" :href="route('skijasi.commerce-theme.home')">Početna</Link>
      <Link class="dogaanja"  :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.category') }" :href="route('skijasi.commerce-theme.category', { slug: 'dogadanja' })">Događanja</Link>
      <Link class="pretraivanje" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.cart') }" :href="route('skijasi.commerce-theme.cart')">Naši članovi</Link>
      <Link class="dogaanja" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.osnovneinformacije') }" :href="route('skijasi.commerce-theme.osnovneinformacije')">Informacije</Link>
      <Link class="dogaanja" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.galerija') }" :href="route('skijasi.commerce-theme.galerija')">Galerija</Link>
      <Link class="dogaanja" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.kontakt') }" :href="route('skijasi.commerce-theme.kontakt')">Kontakt</Link>



  </div>
      </div>
    </nav>
    <a class="logoframe">
      <img class="vector-icon" alt="" src="/storage/slike/vector.svg" />
    </a>
    
    <div class="ikonedesnoframe">
      <button class="drzavaikona" @click="toggleDropdownjezik">
        <img class="croatia-icon" alt="" src="/storage/slike/croatia.svg" />
      </button>
      <template v-if="!isAuthenticated">
      <button class="profilikona" id="login" @click="toggleDropdown">
        <div class="avatar-container"> <img
            class="avatar-container"
            alt=""
            v-if="isAuthenticated"
            :src="userAvatar"
            :style="{  borderRadius: '50%', borderColor: '#03a9f4', width: '110%', borderStyle: 'solid' }"
          />
      
          <img
            class="vector-icon1"
            alt=""
            v-else
            src="/storage/slike/vector1profilikona.svg"
          /></div>
      </button>
      </template>
      
      <template v-else>
        <button class ="profilikona" @click="toggleDropdownprijavljen">
          <div class="avatar-container"> <img
            class="avatar"
            alt=""
        
            :src="userAvatar"
            :style="{  borderRadius: '50%', borderColor: '#03a9f4', width: '110%', borderStyle: 'solid' }"
          /></div>
        </button>
      </template>




      <button class="ikonameniframe" @click="toggleDropdownmeni">
        <img class="vector405-icon" alt="" src="/storage/slike/vector405.svg" />
        <img class="vector404-icon" alt="" src="/storage/slike/vector405.svg" />
        <img class="vector403-icon" alt="" src="/storage/slike/vector405.svg" />
      </button>
    </div>

   
    <div v-if="showDropdown" class="dropdownnavglavni">
      <div class="pozadinadropdown" :class="{'transparent-bg': isHomePage}"/>
      <Link :href="route('skijasi.commerce-theme.login')" class="prvigumbprijavise">
        <div class="prijavi-se">Prijavi se</div>
        <div class="prvigumbprijavise-child" />
      </Link>
      <Link :href="route('skijasi.commerce-theme.register')" class="drugigumbregistracija">
        <div class="drugigumbregistracija-child" />
        <div class="registriraj-se">Registriraj se</div>
      </Link>
    </div>

       
    <div v-if="showDropdownprijavljen" class="dropdownnavglavni">
      <div class="pozadinadropdown" :class="{'transparent-bg': isHomePage}" />
      <Link :href="route('skijasi.commerce-theme.profile')" class="prvigumbprijavise">
        <div class="prijavi-se">Profil</div>
        <div class="prvigumbprijavise-child" />
      </Link>
      <button  @click="logout" class="drugigumbregistracija">
        <div class="drugigumbregistracija-child" />
        <div class="registriraj-se">Odjavi se</div>
      </button>
    </div>





    <div v-if="showDropdownjezik"  class="dropdownjezikglavni" :class="{'transparent-bg': isHomePage}">
      <div class="izaberi-jezik">IZABERI JEZIK</div>
      <div class="listajezika">
        <button class="talijanskiframe">
          <div class="talijanski-it">Talijanski (IT)</div>
          <img
            class="ikonattalijanska-icon"
            alt=""
            src="/storage/slike/ikonattalijanska.svg"
          />
        </button>
        <button class="hrvatskiframe">
          <div class="hrvatski-hr">Hrvatski (HR)</div>
          <img class="ikonattalijanska-icon" alt="" src="/storage/slike/ikonahrvatska.svg" />
        </button>
        <button class="engleskifframe">
          <div class="engleski-uk">Engleski (UK)</div>
          <img class="ikonaengleska-icon" alt="" src="/storage/slike/ikonaengleska.svg" />
        </button>
      </div>
    </div>


    
    <div class="mobilnimeniglavni" v-if="showDropdownmeni" @click="toggleDropdownmeni" >
      <div class="pozadinamobilnimeni" />
      <button class="ikonax" @click="closeDropdown">
          <img class="vector-icon2" alt="" src="/storage/slike/menivector2.svg" />
          <img class="vector-icon2" alt="" src="/storage/slike/menivector3.svg" />
        </button>
      <div class="mobilnimeni">

     
      <Link class="pocetnamobile"  :class="{ 'active-linkmobile': isRouteActive('/web') }" :href="route('skijasi.commerce-theme.home')">Početna <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile"  :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.category') }" :href="route('skijasi.commerce-theme.category', { slug: 'dogadanja' })">Događanja <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.cart') }" :href="route('skijasi.commerce-theme.cart')">Naši članovi <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.osnovneinformacije') }" :href="route('skijasi.commerce-theme.osnovneinformacije')">Informacije <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.galerija') }" :href="route('skijasi.commerce-theme.galerija')">Galerija <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.kontakt') }" :href="route('skijasi.commerce-theme.kontakt')">Kontakt <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
    
      </div>
    </div>
  </header>
</template>









<script>
import { mapActions, mapState } from 'vuex'
import { Link } from '@inertiajs/inertia-vue'
export default {
  components: {
    Link
  },
  data() {
    return {

      
      dropdownOpen: false,
      showDropdown: false,
      showDropdownmeni: false,
      showDropdownjezik: false,
      showDropdownprijavljen: false,
    }
  },
  watch: {
    '$route'() {
    this.$forceUpdate(); 
  },
    '$route': {
      handler() {
        this.dropdownOpen = false
      }
    },
  },
  computed: {


    isHomePage() {
        return this.isRouteActive('/web');
    },

    activeRoute() {
    return this.$page.url.split('/').pop();
  },
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      userName(state) {
        return state.user.name
      },
      notifications(state) {
        return this.$_.take(state.notifications.data, 5)
      },
      logoTheme(state) {
        return this.$_.find(state.themeConfigurations, { key: "logoTheme" }).value
      },
      userAvatar(state) {
        return state.user.avatar;
      },
    })
  },
  methods: {
    toggleDropdown() {
      if (this.showDropdownjezik) {
      this.showDropdownjezik = false;
    }
    this.showDropdown = !this.showDropdown;
    this.$forceUpdate();
  },
  toggleDropdownprijavljen() {
    if (this.showDropdownjezik) {
      this.showDropdownjezik = false;
    }
    this.showDropdownprijavljen = !this.showDropdownprijavljen;
    this.$forceUpdate();
  },
  toggleDropdownjezik() {
    if (this.showDropdownprijavljen) {
      this.showDropdownprijavljen = false;
    }
    if (this.showDropdown) {
      this.showDropdown = false;
    }
    this.showDropdownjezik = !this.showDropdownjezik;
    this.$forceUpdate();
  },
  toggleDropdownmeni() {
    this.showDropdownmeni = !this.showDropdownmeni;
    this.$forceUpdate();
  },
  closeDropdown() {
    this.showDropdownmeni = false;
    this.showDropdownjezik = false;
    this.showDropdownprijavljen = false;
    this.$forceUpdate();
  },

 

 isRouteActive(routeName) {
  const routeSuffix = routeName.split('.').pop();
  const isActive = this.$page.url.endsWith(routeSuffix);
  return isActive;
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
          this.$inertia.visit(this.route('skijasi.commerce-theme.home'))
        })
    }
  }
}
</script>

<style scoped>

/* Define the initial state for every link */
.poetna::after, .dogaanja::after, .pretraivanje::after {
  content: "";
  position: absolute;
  left: 15%; /* Center the line */
  bottom: -8px; /* Adjust this value for the line's position */
  width: 70%; /* 30% less width */
  height: 2px; /* Adjust this value for the line's thickness */
  background-color: #03a9f4; /* Customize this line color */
  transform: scaleX(0);
  transform-origin: center bottom;
  transition: transform 0.3s ease-in-out;
  z-index: 2000;
}


/* Animate the line to full width when hovered */
.poetna:hover::after, .dogaanja:hover::after, .pretraivanje:hover::after {
  transform: scaleX(1);
}



  .poetna {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: Inter;
    color: #21231e;
    text-align: center;
    display: inline-block;
  }
  .poetna:active {
    border-bottom: 6px;
    border-bottom-color: #03a9f4;
  }
  .active {
  position: relative; /* Needed for absolute positioning of pseudo-element */
  border: 4px solid #03a9f4 !important;
  border-bottom: none; /* Remove the original bottom border */
  z-index: 1001;
}

.active::before {
  content: "";
  position: absolute;
  left: 15%; /* Center the line */
  right: 15%; /* Center the line */
  bottom: 0; /* Position at the bottom of the element */
  height: 6px; /* Height of the border */
  background-color: #03a9f4;
  z-index: 1;
}

.active-link {
  position: relative; /* Needed for absolute positioning of pseudo-element */
  padding-bottom: 8px !important; 
}


.active-linkmobile {
  position: relative; /* Needed for absolute positioning of pseudo-element */
 /* padding-bottom: 8px !important; */
 color:#03a9f4;
}
.pocetnamobile:active {
  color:#03a9f4;
  }
  .pocetnamobile {
  position: relative;
    font-weight: 600;
  }







.active-link::before {
  content: "";
  position: absolute;
  left: 15%; /* Center the line */
  right: 15%; /* Center the line */
  bottom: 0; /* Position at the bottom of the element */
  height: 2px; /* Height of the border */
  background-color: #03a9f4;
  z-index: 1;
}

.active-link:hover::before {
  display: none; /* Hide the line on hover */
}





/* Add styles for the animated line */
.active-link::after {
  content: "";
  position: absolute;
  left: 12%;
  bottom: 0px; /* Adjust this value for the line's position */
  width: 84%;
  height: 2px; /* Adjust this value for the line's thickness */
  background-color: #03a9f4; /* Customize this line color */
  transform: scaleX(0);
  transform-origin: center bottom;
  transition: transform 0.3s ease-in-out;
  z-index: 2000;
}

.active-link:hover::after,
.active-link:focus::after {
  transform: scaleX(1);
}



.pocetnamobile:hover .ikonaselectmeni-icon {
  display: block;  /* Show the image when .pocetnamobile is hovered over */
}



  .dogaanja {
    cursor: pointer;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: Inter;
    color: #21231e;
    text-align: center;
    display: inline-block;
  }
  .pretraivanje {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: Inter;
    color: #21231e;
    text-align: center;
    display: inline-block;
    white-space: nowrap;

  }
  .pretraivanje:active {
    border-bottom: 5 pix;
  }
  .poetna-parent {
    margin: 0;
    position: absolute;
    width: 38.19%;
    top: calc(50% - 8px);
    right: 29.17%;
    left: 32.64%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }
  .vector-icon {
    position: absolute;
    top: calc(50% - 60px);
    left: 0rem;
    width: 2.5rem;
    height: 2.5rem;
  }
  .g14 {
    text-decoration: none;
    position: absolute;
    top: calc(50% + 20px);
    left: 2rem;
    width: 2.5rem;
    height: 2.5rem;
  }
  .croatia-icon {
    position: absolute;
    height: 94.46%;
    width: 94.67%;
    top: 2.63%;
    right: 2.68%;
    bottom: 2.91%;
    left: 2.65%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .croatia-1 {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .vector-icon1 {
    position: relative;
    top: calc(50% - 6.5px);
    right: -0.03rem;
    width: 0.81rem;
    height: 0.81rem;
  }
  .vector-wrapper {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    width: 0.67rem;
    height: 0.75rem;
  }
  .croatia-1-parent {
    position: absolute;
    top: 1.38rem;
    left: 83rem;
    width: 5rem;
    height: 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-end;
    gap: 2rem;
  }
  .navigation-bar {
  position: fixed;
  top: 0;
  left: 0;
  background-color: #fff;
  backdrop-filter: blur(4px);
  width: 100%;
  height: 3.75rem;
  z-index: 1000;

}






.pozadinadropdown {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 125.5px);
    background-color: #fff;
    width: 251px;
  }
  .prijavi-se {
    position: absolute;
    top: 32.5%;
    left: calc(50% - 26px);
    font-weight: 600;
  }
  .prvigumbprijavise-child {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 100px);
    border-radius: 20px;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 200px;
  }
  .prvigumbprijavise {
    position: absolute;
    height: 28.57%;
    top: 15.71%;
    bottom: 55.71%;
    left: calc(50% - 99.5px);
    width: 200px;
    transition: transform 0.3s ease;
  }
  .prvigumbprijavise:hover {
    transform: scale(1.07); 
}
  .drugigumbregistracija-child {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 100px);
    border-radius: 20px;
    background-color: #03a9f4;
    width: 200px;
  }
  .registriraj-se {
    position: absolute;
    top: 32.5%;
    left: calc(50% - 38px);
    font-weight: 600;
  }
  .drugigumbregistracija {
    position: absolute;
    height: 28.57%;
    top: 55%;
    bottom: 16.43%;
    left: calc(50% - 99.5px);
    width: 200px;
    color: #fff;
  }




.avatar-wrapper {
  cursor: pointer;
}
.avatar-container {
  position: relative;
  width: 30px;  /* Adjust container width if needed */
  height: 30px; /* Adjust container height if needed */
  top: -0.26rem;
}

.avatar {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  object-fit: cover;
  border: 1px solid #03a9f4;
}


.prijavisepozadina {
    position: absolute;
    height: 100%;
    top: 0%;
    bottom: 0%;
    left: calc(50% - 200px);
    border-radius: 20px;
    background-color: #03a9f4;
    width: 25rem;
  }
  .prijavisetekst {
    position: absolute;
    top: 32%;
    left: calc(50% - 45.33px);
    font-size: 1rem;
    letter-spacing: -0.17px;
    font-weight: 600;
    font-family: Inter;
    color: #fff;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 5.67rem;
  }
  .prijavisegumb {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: 22.44rem;
    left: 0rem;
    width: 25rem;
    height: 3.13rem;
  }


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-toggle {
  background-color: transparent;
  border: none;
  cursor: pointer;
}

.poetna {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: Inter;
    color: #21231e;
    text-align: center;
    display: inline-block;
  }
  .poetna:active {
    border-bottom: 4px;
    border-bottom-color: #03a9f4;
  }
  .pretraivanje {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: Inter;
    color: #21231e;
    text-align: center;
    display: inline-block;
  }
  .pretraivanje:active {
    border-bottom: 5 pix;
  }
  .kontakt {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: relative;
    font-size: 0.88rem;
    font-weight: 600;
    font-family: Inter;
    color: #21231e;
    text-align: center;
    display: inline-block;
  }
  .poetna-parent {
    position: absolute;
    top: calc(50% - 8.5px);
    left: calc(50% - 275px);
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem;
  }
  .navbartekstoviframe-inner {
    position: relative;
    width: 34.38rem;
    height: 1.06rem;
  }
  .navbartekstoviframe {
    margin: 0;
    position: absolute;
    width: 38.19%;
    top: calc(50% - 8px);
    right: 29.17%;
    left: 32.64%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .vector-icon {
    position: absolute;
    top: calc(50% - 60px);
    left: 0rem;
    width: 2.5rem;
    height: 2.5rem;
  }
  .logoframe {
    text-decoration: none;
    position: absolute;
    top: calc(50% + 20px);
    left: 2rem;
    width: 2.5rem;
    height: 2.5rem;
  }
  .croatia-icon {
    position: absolute;
    height: 94.46%;
    width: 94.67%;
    top: 2.63%;
    right: 2.68%;
    bottom: 2.91%;
    left: 2.65%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .drzavaikona {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: calc(50% - 7px);
    right: 5.67rem;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
  }

  .profilikona {
    cursor: pointer;
    border-color: #3498db;
        border: 2px ;
        box-sizing:content-box; 
    background-color: transparent;
    position: absolute;
    top: 0rem;
    right: 2.35rem;
    width: 1.3rem;
    height: 1.3rem;
  }
  .vector405-icon {
    position: absolute;
    width: 75%;
    top: 50%;
    right: 12.5%;
    left: 12.5%;
    max-width: 100%;
    overflow: hidden;
    height: 100%;
  }
  .vector404-icon {
    position: absolute;
    width: 75%;
    top: 25%;
    right: 12.5%;
    left: 12.5%;
    max-width: 100%;
    overflow: hidden;
    height: 100%;
  }
  .vector403-icon {
    position: absolute;
    width: 75%;
    top: 75%;
    right: 12.5%;
    left: 12.5%;
    max-width: 100%;
    overflow: hidden;
    height: 100%;
  }
  .ikonameniframe {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: -0.27rem;
    right: 0.64rem;
    width: 1rem;
    height: 1rem;
    display: none;
  }
  .ikonedesnoframe {
    position: absolute;
    top: 1.28rem;
    right: 0.6rem;
    width: 5rem;
    height: 1.2rem;

align-items: center;
  }
  .pozadinadropdown {
    position: absolute;
    top: 0rem;
    right: 0rem;
    background-color: #fff;
    width: 15.69rem;
    height: 8.75rem;
  }
  .prijavi-se {
    position: absolute;
    top: 0.81rem;
    right: 4.56rem;
    font-weight: 600;
  }
  .prvigumbprijavise-child {
    position: absolute;
    top: 0rem;
    right: 0rem;
    border-radius: 20px;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 12.5rem;
    height: 2.5rem;
  }
  .prvigumbprijavise {
    text-decoration: none;
    position: absolute;
    top: 1.38rem;
    right: 1.56rem;
    width: 12.5rem;
    height: 2.5rem;
    color: inherit;
  }
  .drugigumbregistracija-child {
    position: absolute;
    top: 0rem;
    right: 0rem;
    border-radius: 20px;
    background-color: #03a9f4;
    width: 12.5rem;
    height: 2.5rem;
  }
 
  .registriraj-se {
    position: absolute;
    top: 0.81rem;
    right: 3.88rem;
    font-weight: 600;
  }
  .drugigumbregistracija {
    text-decoration: none;
    position: absolute;
    top: 4.81rem;
    right: 1.56rem;
    width: 12.5rem;
    height: 2.5rem;
    color: #fff;
    transition: transform 0.3s ease; 
  }
  .drugigumbregistracija:hover {
    transform: scale(1.07); 
}
  .dropdownnavglavni {
    position: absolute;
    top: 3.75rem;
    right: 1.56rem;
    width: 15.69rem;
    height: 8.75rem;


    
  }
  .izaberi-jezik {
    position: relative;
    font-weight: 500;
  }
  .talijanski-it {
    position: absolute;
    top: calc(50% - 8px);
    left: calc(50% - 21px);
    font-size: 0.75rem;
    font-weight: 500;
    font-family: Inter;
    color: #000;
    text-align: center;
  }
  .ikonattalijanska-icon {
    position: absolute;
    top: calc(50% - 10px);
    left: calc(50% - 56px);
    width: 1.25rem;
    height: 1.25rem;
    overflow: hidden;
  }
  .talijanskiframe {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: calc(50% - 40px);
    left: calc(50% - 55.5px);
    width: 7rem;
    height: 1.25rem;
  }
  .hrvatski-hr {
    position: absolute;
    top: calc(50% - 8px);
    left: calc(50% - 21px);
    font-size: 0.75rem;
    font-weight: 500;
    font-family: Inter;
    color: #03a9f4;
    text-align: center;
  }
  .hrvatskiframe {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: calc(50% - 10px);
    left: calc(50% - 55.5px);
    width: 7rem;
    height: 1.25rem;
  }
  .engleski-uk {
    position: absolute;
    top: calc(50% - 8px);
    left: calc(50% - 21.5px);
    font-size: 0.75rem;
    font-weight: 500;
    font-family: Inter;
    color: #000;
    text-align: center;
  }
  .ikonaengleska-icon {
    position: absolute;
    top: calc(50% - 10px);
    left: calc(50% - 56.5px);
    width: 1.25rem;
    height: 1.25rem;
    overflow: hidden;
  }
  .engleskifframe {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: calc(50% + 20px);
    left: calc(50% - 56.5px);
    width: 7.06rem;
    height: 1.25rem;
  }
  .listajezika {
    position: relative;
    width: 7.06rem;
    height: 5rem;
  }
  .dropdownjezikglavni {
    position: absolute;
    top: 3.75rem;
    right: 4.44rem;
    background-color: #fff;
    width: 8.31rem;
    height: 8.06rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    padding: 0.69rem 0.63rem;
    box-sizing: border-box;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 0.94rem;
    font-size: 0.63rem;
  }
  .pozadinamobilnimeni {
    position: relative;
    background-color: #fff;
    width: 100%;
    height: 120%;
    z-index: 0;
    top: 9.5%;
    display: flex;
  
  }






  .vector-icon2 {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    margin: 0 !important;
    width: 1.1rem;
    height: 1.1rem;
    overflow: hidden;
    display: flex;
    z-index: 1;
  }
  .ikonax {
  position: absolute;
  top: 5rem;
  right: 5%; /* Position it 5% from the right */
  width: 1rem;
  height: 1rem;
}

  .poetna1 {
    text-decoration: none;
    position: absolute;
    margin: 0 !important;
    top: 4.56rem;
    left: 1.88rem;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    z-index: 2;
  }
  .dogaanja1 {
    text-decoration: none;
    position: absolute;
    margin: 0 !important;
    top: 7.63rem;
    left: 1.88rem;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    z-index: 3;
  }
  .pretraivanje1 {
    text-decoration: none;
    position: absolute;
    margin: 0 !important;
    top: 10.69rem;
    left: 1.88rem;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    z-index: 4;
  }
  .informacije1 {
    text-decoration: none;
    position: absolute;
    margin: 0 !important;
    top: 13.75rem;
    left: 1.88rem;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    z-index: 5;
  }
  .galerija1 {
    text-decoration: none;
    position: absolute;
    margin: 0 !important;
    top: 16.81rem;
    left: 1.88rem;
    font-weight: 600;
    color: #03a9f4;
    display: inline-block;
    z-index: 6;
  }
  .kontakt1 {
    text-decoration: none;
    position: absolute;
    margin: 0 !important;
    top: 19.88rem;
    left: 1.88rem;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    z-index: 7;
  }
  .ikonaselectmeni-icon {
    position: absolute;
right: 100%;
top: 0%;
    width: 2rem;
    height: 2rem;
    overflow: hidden;
  display: none;  /* Hide the image by default */



  }

  .mobilnimeni {
    position: absolute;
    padding-top: 6rem;
    left: 2rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.3rem;

  }
  .mobilnimeniglavni {
    position: absolute;
    height: 1000%;
    width: 100%;
    top: 1.67%;
    right: 44.44%;
    bottom: -646.67%;
    left: 0%;
    display: none;
    font-size: 1.5rem;
  }



  .navigation-bar {

    backdrop-filter: blur(2px);
    width: 100%;
    height: 3.75rem;
    text-align: center;
    font-size: 0.75rem;
    color: #000;
    font-family: Inter;
    z-index: 1000;

   /*  position: fixed;  ako zelimo da je uvijek vidljiv*/
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}



.transparent-bg {
    background-color: transparent;
}




  .user-avatar{
    top: 1.67%;
    right: 44.44%;
  }



  @media screen and (max-width: 420px) {
    .navbartekstoviframe {
      display: none;
    }

    .logoframe {
      display: flex;
    }

    .ikonameniframe {
      display: flex;
    }

    .ikonedesnoframe {
      display: flex;
    }
    .ikonax {
      display: flex;
    }

.navigation-bar{
background-color: #fff;
}

  }
  @media screen and (max-width: 800px) {


    .navbartekstoviframe {
      display: none;
    }

    .logoframe {
      display: flex;
    }
    .ikonax {
      display: flex;

    }

    .ikonameniframe {
      display: flex;
    }

    .ikonedesnoframe {
      display: flex;
      flex-direction: row;
    }

    .mobilnimeniglavni {
      display: flex;
    }

    .avatar-container {
  right: 0.4rem;
}





  }
</style>