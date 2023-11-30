<template>
  <div>
    <Head :title="$page.props.name" />

    <div class="navbar ">
      <div class="pt-8  container grid grid-cols-1 md:grid-cols-profile">
<!--1-->
        <div class="pr-8">
          <div class="h-22 flex items-center border-b border-plava-200">
            <div class="border-plava-200 border-2 rounded-full"> <!-- New container with border -->
            <div class="h-16 w-16 items-center justify-center clip-circle">
              <img :src="user.avatar" alt="User's avatar" class="object-cover h-16 w-16">
            </div>  </div>
            <div class="inline-block flex-wrap pl-2">
              <div class="text-sm font-medium w-full line-clamp-1 text-gray-700">{{ user.name }}</div>
            
            </div>
          </div>
          <div class="mt-4 flex items-center gap-y-3 flex-wrap">
          
            <Link :href="route('skijasi.commerce-theme.profile')" class="w-full inline-flex items-center group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Moj Profil</span>
            </Link>
            <!--
            <Link :href="route('skijasi.commerce-theme.address')" class="w-full inline-flex items-center group">
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Adresa i Suputnici</span>
            </Link>-->
            <Link :href="route('skijasi.commerce-theme.change-password')" class="w-full inline-flex items-center group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M21.0003 2L19.0003 4M19.0003 4L22.0003 7L18.5003 10.5L15.5003 7.5M19.0003 4L15.5003 7.5M11.3903 11.61C11.9066 12.1195 12.3171 12.726 12.598 13.3948C12.879 14.0635 13.0249 14.7813 13.0273 15.5066C13.0297 16.232 12.8887 16.9507 12.6122 17.6213C12.3357 18.2919 11.9293 18.9012 11.4164 19.4141C10.9035 19.9271 10.2942 20.3334 9.62358 20.6099C8.95296 20.8864 8.23427 21.0275 7.50891 21.025C6.78354 21.0226 6.06582 20.8767 5.39707 20.5958C4.72831 20.3148 4.12174 19.9043 3.61227 19.388C2.6104 18.3507 2.05604 16.9614 2.06857 15.5193C2.0811 14.0772 2.65953 12.6977 3.67927 11.678C4.69902 10.6583 6.07849 10.0798 7.52057 10.0673C8.96265 10.0548 10.352 10.6091 11.3893 11.611L11.3903 11.61ZM11.3903 11.61L15.5003 7.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Promjena lozinke</span>
            </Link>
            <Link :href="route('skijasi.commerce-theme.order')" class="w-full inline-flex items-center group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1338_3676)">
    <path d="M22.9088 12.1007V8.7275C22.9088 7.5837 22.0216 6.6535 20.9006 6.56329L17.7681 1.09179C17.4778 0.585754 17.009 0.224073 16.4481 0.0738875C15.8899 -0.0752748 15.3061 0.00306481 14.8064 0.293873L4.06783 6.5457H2.1818C0.97853 6.5457 0 7.52418 0 8.7275V21.8182C0 23.0215 0.978478 24 2.1818 24H20.727C21.9302 24 22.9088 23.0215 22.9088 21.8182V18.445C23.5423 18.2191 23.9996 17.6194 23.9996 16.9092V13.6365C23.9996 12.9263 23.5423 12.3266 22.9088 12.1007ZM19.633 6.5457H14.8789L18.4445 4.4698L19.633 6.5457ZM17.9025 3.52313L12.7108 6.5457H10.5573L17.3641 2.5827L17.9025 3.52313ZM15.3556 1.23666C15.6022 1.0923 15.8904 1.05395 16.1658 1.12748C16.4444 1.20204 16.6766 1.38209 16.821 1.63403L16.8221 1.63603L8.38935 6.5457H6.23598L15.3556 1.23666ZM21.8178 21.8182C21.8178 22.4196 21.3283 22.9091 20.727 22.9091H2.1818C1.58045 22.9091 1.09093 22.4196 1.09093 21.8182V8.7275C1.09093 8.12615 1.58045 7.63663 2.1818 7.63663H20.727C21.3283 7.63663 21.8178 8.12615 21.8178 8.7275V12.0002H18.5452C16.7405 12.0002 15.2725 13.4682 15.2725 15.2728C15.2725 17.0775 16.7405 18.5455 18.5452 18.5455H21.8178V21.8182ZM22.9088 16.9092C22.9088 17.2101 22.6643 17.4546 22.3633 17.4546H18.5452C17.3419 17.4546 16.3634 16.4762 16.3634 15.2728C16.3634 14.0696 17.3418 13.091 18.5452 13.091H22.3633C22.6642 13.091 22.9088 13.3355 22.9088 13.6365V16.9092Z" fill="black"/>
    <path d="M18.545 14.1816C17.9436 14.1816 17.4541 14.6712 17.4541 15.2725C17.4541 15.8739 17.9436 16.3634 18.545 16.3634C19.1463 16.3634 19.6358 15.8739 19.6358 15.2725C19.6359 14.6712 19.1464 14.1816 18.545 14.1816Z" fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_1338_3676">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Povijest plaćanja</span>
            </Link>
            <Link :href="route('skijasi.commerce-theme.notification')" class="w-full inline-flex items-center group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Obavijesti</span>
            </Link>

            <div class="w-full inline-flex items-center group">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1335_3649)">
    <path d="M23.2497 11.25H13.75C13.336 11.25 13 10.914 13 10.5C13 10.086 13.336 9.75 13.75 9.75H23.2497C23.6637 9.75 23.9997 10.086 23.9997 10.5C23.9997 10.914 23.6637 11.25 23.2497 11.25Z" fill="black"/>
    <path d="M19.4998 14.9996C19.3077 14.9996 19.1158 14.9265 18.9697 14.7796C18.6768 14.4865 18.6768 14.0115 18.9697 13.7186L22.1897 10.4988L18.9697 7.27878C18.6768 6.98582 18.6768 6.51086 18.9697 6.2179C19.2629 5.92476 19.7378 5.92476 20.0308 6.2179L23.7807 9.96779C24.0736 10.2607 24.0736 10.7357 23.7807 11.0287L20.0308 14.7785C19.8838 14.9265 19.6919 14.9996 19.4998 14.9996Z" fill="black"/>
    <path d="M7.99981 23.9992C7.78577 23.9992 7.58271 23.9692 7.37983 23.9062L1.3619 21.9013C0.543074 21.6153 0 20.8523 0 19.9994V2C0 0.897006 0.897006 0 2 0C2.21386 0 2.41692 0.0300284 2.61997 0.0930147L8.63773 2.09796C9.45673 2.38396 9.99963 3.14694 9.99963 3.99981V21.9993C9.99963 23.1022 9.1028 23.9992 7.99981 23.9992ZM2 1.49995C1.72498 1.49995 1.49995 1.72498 1.49995 2V19.9994C1.49995 20.2124 1.64295 20.4103 1.84693 20.4814L7.83667 22.4773C7.8797 22.4912 7.93573 22.4993 7.99981 22.4993C8.27483 22.4993 8.49967 22.2743 8.49967 21.9993V3.99981C8.49967 3.78687 8.35667 3.58894 8.1527 3.5179L2.16296 1.52192C2.11993 1.50801 2.0639 1.49995 2 1.49995Z" fill="black"/>
    <path d="M15.2494 7.99981C14.8355 7.99981 14.4995 7.66382 14.4995 7.24983V2.74997C14.4995 2.06097 13.9386 1.49995 13.2496 1.49995H1.99998C1.58599 1.49995 1.25 1.16397 1.25 0.749977C1.25 0.335988 1.58599 0 1.99998 0H13.2496C14.7666 0 15.9994 1.23299 15.9994 2.74997V7.24983C15.9994 7.66382 15.6634 7.99981 15.2494 7.99981Z" fill="black"/>
    <path d="M13.25 20.9998H9.24998C8.83599 20.9998 8.5 20.6638 8.5 20.2498C8.5 19.8358 8.83599 19.4999 9.24998 19.4999H13.25C13.939 19.4999 14.4998 18.9388 14.4998 18.2498V13.75C14.4998 13.336 14.8358 13 15.2498 13C15.6638 13 15.9998 13.336 15.9998 13.75V18.2498C15.9998 19.7668 14.767 20.9998 13.25 20.9998Z" fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_1335_3649">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg>              <span @click="() => logout()" class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Odjavi se</span>
            </div>
          </div>
        </div>
<!--1-->

        <div class="bg-white shadow-sm px-6 rounded-xl">
          <!--2-->
          <div class="h-22 flex flex-col py-4 justify-center border-plava-200 border-b">
            <span class="text-lg font-medium plavi-text">Moj Profil</span>
          
          </div>
          <div class="grid grid-cols-3 p-6 mb-4 items-start">
            <div class="col-span-2 grid md:grid-cols-3 lg:grid-cols-profile-content gap-x-6 pr-4 content-center items-center">
              <div class="text-sm text-right text-black inter mb-4">Ime</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="name" disabled type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>

              <div class="text-sm text-right text-black inter mb-4">Prezime</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="username" disabled type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="text-sm text-right text-black inter mb-4">Datum rođenja</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="datumrodjenja" disabled type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="text-sm text-right text-black inter mb-4">OIB</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="oib" disabled type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="text-sm text-right text-black inter mb-4">Spol</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="spol" disabled type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>

              <div class="text-sm text-right text-black inter mb-4">Broj mobitela</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="brojmobitela" type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>
              <div class="text-sm text-right text-black inter mb-4">Podijeli Facebook</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="urlfacebook" type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>
       
              <div class="text-sm text-right text-black inter mb-4">Podijeli LinkedIn</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="urllinkedin" type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>
    




              <div class="text-sm text-right text-black inter mb-4">Email</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="email" disabled type="text" class="w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary disabled:bg-gray-100 disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="col-start-2 col-end-3 mt-2 items-center justify-center flex text-center">
                <button class="bg-primary1  font-medium px-9 py-2 rounded-md text-white text-sm filter hover:brightness-110" @click="save">Spremi</button>
              </div>
            </div>
      <!--2-->

            <!--3-->
            <div class="flex flex-col justify-start col-span-1 p-8 items-center border-l border-plava-200 ml-4">
              <div class="border-plava-200 border-2 rounded-full"> <!-- New container with border -->

                <div class="h-40 w-40 bg-gray-300 flex rounded-full items-center justify-center clip-circle relative "> 
                <template v-if="user.avatar">
                  <img :src="avatar ? avatar : user.avatar" alt="User's avatar" class="object-cover h-40 w-40">
        <!-- Conditional overlay based on avatar approval status -->
        <div v-if="avatar_approved" class="absolute bottom-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
            <span class="text-white items-center justify-center flex text-center">Čeka se odobrenje</span>
        </div>
                </template>
                <template v-else>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-full text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                  </svg>
                </template>
              </div>   </div>
              <input type="file" @change="filesChange" accept="image/png, image/jpeg" ref="file" class="hidden">
              <button @click="$refs.file.click()" class="px-6 py-2 text-sm bg-white border border-plava-200 mt-4 mb-2 rounded-md hover:bg-gray-50">
                Odaberite Sliku
              </button>
              <span class="text-sm text-gray-400">Veličina slike: maks. 4 MB</span>
              <span class="text-sm text-gray-400">Format slike: .jpeg, .png</span>
            </div>
       <!--3-->
          </div>
        </div>




      </div>
    </div>




 
    </div>
  
</template>

<script>
import appLayout from '../../layouts/app.vue'
import profileLayout from '../../layouts/profile.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'

export default {
  layout: [appLayout, profileLayout],
  components: {
    Link,
    Head
  },
  data() {
    return {
      avatar_approved: null,

      name: null,

      username: null,
      datumrodjenja: null,
      brojmobitela: null,
      drzava: null,
      grad: null,
      postanskibroj: null,
      adresa: null,
      oib: null,
      spol: null,
      urlfacebook: null,
      urltwitter: null,
      urlinstagram: null,
      urllinkedin: null,

      email: null,
      avatar: null,
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
      },
    }),
  },
  mounted() {
    if (!this.isAuthenticated) {
      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    }

    this.name = this.user.name;
    this.email = this.user.email;
    this.avatar = this.user.avatar;

    this.username = this.user.username;
    this.datumrodjenja = this.user.datumrodjenja;
    this.brojmobitela = this.user.brojmobitela;
    this.drzava = this.user.drzava;
    this.grad = this.user.grad;
    this.postanskibroj = this.user.postanskibroj;
    this.adresa = this.user.adresa;
    this.oib = this.user.oib;
    this.spol = this.user.spol;
    this.urlfacebook = this.user.urlfacebook;
    this.urltwitter = this.user.urltwitter;
    this.urlinstagram = this.user.urlinstagram;
    this.urllinkedin = this.user.urllinkedin;

    this.avatar_approved = this.user.avatar_approved;
    console.log("User object:", this.user);
    console.log("avatar_approved:", this.avatar_approved);

  },

  methods: {
    filesChange(e) {
      const file = e.target.files[0]
      const fileSize = Math.round((file.size / 1024))
      if (fileSize > 4048) {
        this.$alert('Maksimalna veličina slike je 4MB!')
        return
      }
      const fileReader = new FileReader()
      fileReader.readAsDataURL(file)
      fileReader.onload = () => {
        this.avatar = fileReader.result
      }
      fileReader.onerror = (error) => {
        this.$alert(error)
      };
    },

    save() {
      this.$api.skijasiUser
        .edit({
   
        name: this.name,
        email: this.email,
        brojmobitela: this.brojmobitela,
        urlfacebook: this.urlfacebook,
        urltwitter: this.urltwitter,
        urlinstagram: this.urlinstagram,
        urllinkedin: this.urllinkedin,

        //spremanje u new_avatar 
        avatar: this.avatar

        })
        .then(res => {
          console.log("API response:", res.data);
          this.$store.dispatch('SET_USER', res.data.user)
          this.$alert('Uspješno pohranjeno!')
        })
        .catch(err => {
          this.$alert('Neuspješno! Provjerite da li ste unijeli sve dobro')
        })
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
    padding-top: 3rem; 
    padding-bottom: 3.15rem; 
    font-family: Inter;
  }


  .border-plava-200 {
    --tw-border-opacity: 1;
    border-color: rgba(3, 169, 244, var(--tw-border-opacity));
}

.inter{
font-family: Inter;
}
.plavi-text {
   
  color: #03A9F4;
font-family: Inter;
font-size: 32px;
font-style: normal;
font-weight: 600;
line-height: normal;
}

.plava-boja {
   color: #03A9F4;
 }
 .bg-plava-boja {
   background-color: #03A9F4;
 }

 .bg-primary1{
  --tw-bg-opacity: 1;
  background-color: rgba(3, 169, 244, var(--tw-border-opacity));
}
  </style>