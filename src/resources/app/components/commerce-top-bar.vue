
<template>
  <header class="navigation-bar" :class="{ 'white-bg': hasScrolled, 'transparent-bg': isHomePage && !hasScrolled }">
    <nav class="navbartekstoviframe">
      <div class="navbartekstoviframe-inner">
        <div class="poetna-parent">
       
      <Link class="poetna animation-link"  :class="{ 'active-link': isRouteActive('/') }" :href="route('skijasi.commerce-theme.home')">Početna</Link>
      <Link class="dogaanja animation-link"  :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.kategorija/dogadanja') }" :href="route('skijasi.commerce-theme.kategorija', { slug: 'dogadanja' })">Događanja</Link>
      <Link class="pretraivanje animation-link" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.nasiclanovi') }" :href="route('skijasi.commerce-theme.nasiclanovi')">Naši članovi</Link>
      <button 
  class="dogaanja animation-link" 
  @mouseenter="toggleDropdownInformacije(true)" 
  @click="toggleDropdownInformacije" 
  :class="{ 'active-link': showDropdowninformacije || isRouteActive('skijasi.commerce-theme.osnovneinformacije') || isRouteActive('skijasi.commerce-theme.djelatnostihzutsa') || isRouteActive('skijasi.commerce-theme.infoclanarine') || isRouteActive('skijasi.commerce-theme.izradaiskaznice') || isRouteActive('skijasi.commerce-theme.podrucnizborovi') || isRouteActive('skijasi.commerce-theme.dokumenti') }">
  Informacije
</button>



      <Link class="dogaanja animation-link" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.galerija') }" :href="route('skijasi.commerce-theme.galerija')">Galerija</Link>
      <Link class="dogaanja animation-link" :class="{ 'active-link': isRouteActive('skijasi.commerce-theme.kontakt') }" :href="route('skijasi.commerce-theme.kontakt')">Kontakt</Link>




  </div>
      </div>
    </nav>
    <div class="logoframe">
      <Link :href="route('skijasi.commerce-theme.home')">
      <img class="vector-icon" alt="" src="/storage/slike/logonovi.svg" />
    </Link>
    </div>

    <div class="ikonedesnoframe">

      <template v-if="showNotification">
             <Link :href="route('skijasi.commerce-theme.notification')" class="w-full inline-flex items-center obavijestikona"
        @click="handleLinkClick"
      >
    <div class="sidebar-icon">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="16"
    height="16"
    viewBox="0 0 24 24"
    fill="none"
    :class="{ 'has-unread': hasUnreadMessages }"
    class="bell-icon"
  >
    <path
      d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z"
      stroke="black"
      stroke-width="1.5"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
    <path
      d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21"
      stroke="black"
      stroke-width="1.5"
      stroke-linecap="round"
      stroke-linejoin="round"
    />
  </svg>
</div>
  </Link></template>

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

    <transition name="fade">
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
      </transition>

       <transition name="fade">
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
  </transition>



 <!-- <div v-if="showDropdownjezik"  class="dropdownjezikglavni" :class="{'transparent-bg': isHomePage}"> -->

    <div v-if="showDropdownjezik"  class="dropdownjezikglavni">
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






    <div class="podmeniclanarine" v-if="showDropdowninformacije"
     @mouseenter="toggleDropdownInformacije(true)"
     @mouseleave="toggleDropdownInformacije(false)"
     @click="toggleDropdownInformacije">
  <!-- Dropdown content -->
      <Link class="osnovne-informacije" :href="route('skijasi.commerce-theme.osnovneinformacije')">Osnovne informacije</Link>
      <Link class="djelatnost-hzuts-a" :href="route('skijasi.commerce-theme.djelatnostihzutsa')">Djelatnost HZUTS-a</Link>
      <Link class="status-lanova-hzuts-a" :href="route('skijasi.commerce-theme.nasiclanovi')" >Status članova HZUTS-a</Link>
      <Link class="lanarineInfo" :href="route('skijasi.commerce-theme.infoclanarine')" >Članarine</Link> 
      <Link class="izrada-lanske-iskaznice" :href="route('skijasi.commerce-theme.izradaiskaznice')" >Izrada članske iskaznice</Link>
      <Link class="podruni-zboroviMeni" :href="route('skijasi.commerce-theme.podrucnizborovi')" >Područni zborovi</Link>
      <div class="dokumenti-hzuts-a">Dokumenti HZUTS-a</div>
 
</div>


<div class="mobilnimeniglavniInfo" v-if="showDropdowninformacijeMob">
<div class="pozadinamobilnimeni" />
      <button class="ikonax" @click="closeDropdown">
          <img class="vector-icon2" alt="" src="/storage/slike/menivector2.svg" />
          <img class="vector-icon2" alt="" src="/storage/slike/menivector3.svg" />
        </button>
        <div class="infolista">

  <!-- Dropdown content -->
      <Link class="osnovne-informacije" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.osnovneinformacije') }" :href="route('skijasi.commerce-theme.osnovneinformacije')" @click="closeDropdown">Osnovne informacije</Link>
      <Link class="djelatnost-hzuts-a" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.djelatnostihzutsa') }" :href="route('skijasi.commerce-theme.djelatnostihzutsa')" @click="closeDropdown">Djelatnost HZUTS-a</Link>
      <Link class="status-lanova-hzuts-a" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.nasiclanovi') }" :href="route('skijasi.commerce-theme.nasiclanovi')" @click="closeDropdown">Status članova HZUTS-a</Link>
      <Link class="lanarineInfo" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.infoclanarine') }" :href="route('skijasi.commerce-theme.infoclanarine')" @click="closeDropdown">Članarine</Link> 
      <Link class="izrada-lanske-iskaznice" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.izradaiskaznice') }" :href="route('skijasi.commerce-theme.izradaiskaznice')" @click="closeDropdown">Izrada članske iskaznice</Link>
      <Link class="podruni-zboroviMeni" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.podrucnizborovi') }" :href="route('skijasi.commerce-theme.podrucnizborovi')" @click="closeDropdown">Područni zborovi</Link>
      <div class="dokumenti-hzuts-a">Dokumenti HZUTS-a</div>
    </div>
</div>




    
    <div class="mobilnimeniglavni" v-if="showDropdownmeni" @click="toggleDropdownmeni">
      <div class="pozadinamobilnimeni" />
      <button class="ikonax" @click="closeDropdown">
          <img class="vector-icon2" alt="" src="/storage/slike/menivector2.svg" />
          <img class="vector-icon2" alt="" src="/storage/slike/menivector3.svg" />
        </button>
      <div class="mobilnimeni">

     
      <Link class="pocetnamobile"  :class="{ 'active-linkmobile': isRouteActive('/') }" :href="route('skijasi.commerce-theme.home')">Početna <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile"  :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.kategorija') }" :href="route('skijasi.commerce-theme.kategorija', { slug: 'dogadanja' })">Događanja <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.nasiclanovi') }" :href="route('skijasi.commerce-theme.nasiclanovi')">Naši članovi <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <button 
  class="pocetnamobile" 
  @click="toggleDropdownInformacijeMob" 
  :class="{ 'active-linkmobile': showDropdowninformacijeMob }">
  Informacije<img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" />
</button>

      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.galerija') }" :href="route('skijasi.commerce-theme.galerija')">Galerija <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
      <Link class="pocetnamobile" :class="{ 'active-linkmobile': isRouteActive('skijasi.commerce-theme.kontakt') }" :href="route('skijasi.commerce-theme.kontakt')">Kontakt <img class="ikonaselectmeni-icon" alt="" src="/storage/slike/ikonaselectmeni.svg" /></Link>
    
      </div>
    </div>
  </header>
</template>









<script>
import { mapActions, mapState } from 'vuex'
import { Link } from '@inertiajs/inertia-vue'

import poruke from  '../../../../../core/src/resources/js/api/modules/skijasi-poruke.js';


export default {
  components: {
    Link
  },
  data() {
    return {

      adminMessages: [],
      currentUser: null,
      users: [], 
      showNotificationTemplate: true,


      hasScrolled: false,


      dropdownOpen: false,
      showDropdown: false,
      showDropdownmeni: false,
      showDropdownjezik: false,
      showDropdownprijavljen: false,
      showDropdowninformacije: false,
      showDropdowninformacijeMob: false,
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


  mounted() {
  window.addEventListener('scroll', this.handleScroll);
  this.fetchAdminMessages();
},
beforeDestroy() {
  window.removeEventListener('scroll', this.handleScroll);
},

  computed: {


    isHomePage() {
        return this.isRouteActive('/');
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
      userId(state) {
        return state.user.id
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
    }),

    hasUnreadMessages() {
  if (this.adminMessages.length === 0) {
    return false; // Return false if no admin messages are available
  }

  // Check if there are any messages where the current user's ID is not in the 'is_read' array
  return this.adminMessages.some(message => {
    return !message.is_read || !message.is_read.includes(String(this.userId));
  });
},

showNotification() {
    return this.showNotificationTemplate && this.hasUnreadMessages && this.isAuthenticated;
  }


  },


  methods: {
    handleLinkClick() {
    this.fetchAdminMessages();
    this.showNotificationTemplate = false;
  },

    fetchAdminMessages() {
      poruke.getMessages()
      .then((response) => {
      console.log("API Response:", response);
      if (response) {
        console.log("Response Data:", response);
        // Filter messages where message.sent_to contains this user.id or "svi"
        const filteredMessages = response.filter(message => {
          return message.sent_to.includes(String(this.userId)) || message.sent_to.includes("svi");
        });
        this.adminMessages = filteredMessages;
        console.log("Messages:", this.adminMessages);
      } else {
        console.error("No data received from API");
      }
    })
    .catch((error) => {
      console.error("Error fetching user messages:", error);
    });
},



    handleScroll() {
    this.hasScrolled = window.scrollY > 0;
  },


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
    this.showDropdowninformacije = false;
    this.showDropdowninformacijeMob = false;
    this.$forceUpdate();
  },

  toggleDropdownInformacije(value) {
    // For mouse events, pass true or false directly.
    // For click events, toggle the current state.
    if (typeof value === 'boolean') {
      this.showDropdowninformacije = value;
    } else {
      this.showDropdowninformacije = !this.showDropdowninformacije;
    }
  },
  toggleDropdownInformacijeMob(value) {
    // For mouse events, pass true or false directly.
    // For click events, toggle the current state.
    if (typeof value === 'boolean') {
      this.showDropdowninformacijeMob = value;
    } else {
      this.showDropdowninformacijeMob = !this.showDropdowninformacijeMob;
    }
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

.osnovne-informacije:hover,
.djelatnost-hzuts-a:hover,
.status-lanova-hzuts-a:hover,
.lanarineInfo:hover,
.izrada-lanske-iskaznice:hover,
.podruni-zboroviMeni:hover,
.dokumenti-hzuts-a:hover {
    color: #03a9f4;
    cursor: pointer;
}


.infolista {
    position: absolute;
    display: flex;
    top: 96px;
    left: 20px;
    font-weight: 500;
    gap: 2rem;
    width: 100%;
  }

.osnovne-informacije {
    position: absolute;
    top: 15px;
    left: 20px;
    font-weight: 500;
   
  }
  .djelatnost-hzuts-a {
    position: absolute;
    top: 42px;
    left: 20px;
    font-weight: 500;
  }
  .status-lanova-hzuts-a {
    position: absolute;
    top: 69px;
    left: 20px;
    font-weight: 500;
  }
  .lanarineInfo {
    position: absolute;
    top: 96px;
    left: 20px;
    font-weight: 500;

  }
  .izrada-lanske-iskaznice {
    position: absolute;
    top: 123px;
    left: 20px;
    font-weight: 500;
  }
  .podruni-zboroviMeni {
    position: absolute;
    top: 150px;
    left: 20px;
    font-weight: 500;
  }
  .dokumenti-hzuts-a {
    position: absolute;
    top: 177px;
    left: 20px;
    font-weight: 500;
    color: grey;
  }
  .podmeniclanarine {
    position: absolute;
    top: 60px;
    left: 53%;
    background-color: #fff;
    width: 220px;
    height: 209px;
    font-size: 14px;
  }




.white-bg {
  background-color: white;
}

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




.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
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
    width: 100vw;
    text-align: left;
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



.animation-link {
  position: relative; /* Needed for absolute positioning of pseudo-element */
  padding-bottom: 8px !important; 
}

.animation-link:hover::after,
.animation-link:focus::after {
  transform: scaleX(1);
}


/* Add styles for the animated line */
.animation-link::after {
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

.animation-link:hover::after,
.animation-link:focus::after {
  transform: scaleX(1);
}



.pocetnamobile:hover  {
  color: #03a9f4;
/*   display: block;  Show the image when .pocetnamobile is hovered over */
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
    border-bottom: 5px;
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
    top: calc(50% - 40px);
    left: 0rem;
    width: 2.8rem;
    height: 2.8rem;
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
    border-bottom: 5px;
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
    top: calc(50% + 4px);
    left: 2rem;
    width: 4.2rem;
    height: 4.2rem;
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
  .obavijestikona {
    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    top: calc(50% - 7px);
    right: 8rem;
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
    height: 100vh;
    z-index: 0;
    margin-top: 3.75rem;
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
    padding-top: 6.37rem;
    left: 2.26rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.3rem;

  }
  .mobilnimeniInfo {
    position: absolute;
    padding-top: 6rem;
    left: 2.2rem;
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
    top: 0%;
    right: 44.44%;
    bottom: -646.67%;
    left: 0%;
    display: none;
    font-size: 1.5rem;
  }
  .mobilnimeniglavniInfo {
    position: flex;
    height: 1000%;
    width: 100%;
    top: 0%;
    right: 44.44%;
    bottom: -646.67%;
    left: 0%;
    display: none;
    font-size: 1.5rem;
  }


  .navigation-bar {

  top: 0;
  left: 0;
  background-color: #fff;

  width: 100vw;
  height: 3.75rem;



    backdrop-filter: blur(1px);
 
    height: 3.75rem;
    text-align: center;
    font-size: 0.75rem;
    color: #000;
    font-family: Inter;
    z-index: 1000;

   /*  position: fixed;  relative ako zelimo da je uvijek vidljiv*/
   position: fixed;

  
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

    .vector-icon1 {
    position: relative;
    top: calc(50% - 7.5px);
    right: -0.3rem;
    width: 0.81rem;
    height: 0.81rem;
  }
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



  }
  @media screen and (max-width: 800px) {

    .osnovne-informacije {
        top: 15px; /* starting position */
        font-weight: 600;
    }
    .djelatnost-hzuts-a {
        top: 60px; /* increase gap */
        font-weight: 600;
    }
    .status-lanova-hzuts-a {
        top: 105px; /* increase gap */
        font-weight: 600;
    }
    .lanarineInfo {
        top: 150px; /* increase gap */
        font-weight: 600;
    }
    .izrada-lanske-iskaznice {
        top: 195px; /* increase gap */
        font-weight: 600;
    }
    .podruni-zboroviMeni {
        top: 240px; /* increase gap */
        font-weight: 600;
    }
    .dokumenti-hzuts-a {
        top: 285px; /* increase gap */
        font-weight: 600;
    }




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
    .mobilnimeniglavniInfo {
      display: flex;
    }

    .avatar-container {
  right: 0.8rem;
}


  }

  .bell-icon.has-unread path {
  stroke: #21231e;
}
@keyframes swing {
  0% {
    transform: rotate(0deg);
  }
  25% {
    transform: rotate(-15deg);
  }
  50% {
    transform: rotate(15deg);
  }
  75% {
    transform: rotate(-15deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

.bell-icon.has-unread {
  animation: swing 0.5s ease-in-out infinite;
}
.has-unread svg {
  stroke: #21231e;
}

</style>