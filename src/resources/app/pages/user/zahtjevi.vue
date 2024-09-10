<template>
  <div>
    <Head :title="$page.props.name" />

    

    <div class="navbar">
      
      <!-- Floating Action Button -->
      <div v-if="!isSidebarExpanded" class="fab" :class="{ open: isGridVisible }" @touchend="toggleGridVisibility" @click="toggleGridVisibility">
    <span class="fab-icon" :class="{ 'icon-active': isGridVisible }">
      <svg width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="20" y="30" width="60" height="8" fill="black"/>
        <rect x="20" y="46" width="60" height="8" fill="black"/>
        <rect x="20" y="62" width="60" height="8" fill="black"/>
      </svg>
    </span>
  </div>
  <!-- Floating Action Button -->


  <div class="pt-5 container grid mojgrid-cols-profile pr-5"  @wheel="handleScrollAttempt">  
     <!--1-->
     <div v-if="isSidebarExpanded" class="Moj-pr-8">

          <div :class="{'h-22 flex items-center': true, 'border-b': isSidebarExpanded, 'border-plava-200': !isSidebarExpanded, 'sakrij': true}">

            <div v-if="isSidebarExpanded" class="border-plava-200 border-2 rounded-full"> <!-- New container with border -->
            <div class="h-14 w-14 items-center justify-center clip-circle sidebar-item sidebar-icon">
              <img :src="user.avatar" alt="User's avatar" class="object-cover h-14 w-14">
            </div>  </div>
            <div class="inline-block flex-wrap pl-2">
              <div v-if="isSidebarExpanded" class="text-sm font-bold w-full line-clamp-2 ">{{ user.name }} {{ user.username }}</div>
            
            </div>
          </div>

          <div :class="['sidebar', { 'sidebar-open': isSidebarOpen, 'sidebar-closed': !isSidebarOpen }]">

          <div class="mt-4 flex items-center gap-y-3 flex-wrap sidebarClasses ">

            <div v-if="!isSidebarExpanded" class="h-10 w-10 items-center justify-center clip-circle sidebar-icon sidebar-avatar">
              <img :src="user.avatar" alt="User's avatar" class="object-cover h-10 w-10">
            </div> 
          
            <Link :href="route('skijasi.commerce-theme.profile')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Moj Profil</span>
            </Link>
            <!--
            <Link :href="route('skijasi.commerce-theme.address')" class="w-full inline-flex items-center group">
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Adresa i Suputnici</span>
            </Link>-->
            <Link :href="route('skijasi.commerce-theme.change-password')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M21.0003 2L19.0003 4M19.0003 4L22.0003 7L18.5003 10.5L15.5003 7.5M19.0003 4L15.5003 7.5M11.3903 11.61C11.9066 12.1195 12.3171 12.726 12.598 13.3948C12.879 14.0635 13.0249 14.7813 13.0273 15.5066C13.0297 16.232 12.8887 16.9507 12.6122 17.6213C12.3357 18.2919 11.9293 18.9012 11.4164 19.4141C10.9035 19.9271 10.2942 20.3334 9.62358 20.6099C8.95296 20.8864 8.23427 21.0275 7.50891 21.025C6.78354 21.0226 6.06582 20.8767 5.39707 20.5958C4.72831 20.3148 4.12174 19.9043 3.61227 19.388C2.6104 18.3507 2.05604 16.9614 2.06857 15.5193C2.0811 14.0772 2.65953 12.6977 3.67927 11.678C4.69902 10.6583 6.07849 10.0798 7.52057 10.0673C8.96265 10.0548 10.352 10.6091 11.3893 11.611L11.3903 11.61ZM11.3903 11.61L15.5003 7.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Promjena lozinke</span>
            </Link>


            <Link :href="route('skijasi.commerce-theme.notification')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"   :class="{ 'has-unread': hasUnreadMessages }"
    class="bell-icon">
  <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text"   :class="{ 'text-yellow-500': hasUnreadMessages, 'text-gray-700': !hasUnreadMessages }">Obavijesti</span>
            </Link>



            <Link :href="route('skijasi.commerce-theme.zahtjevi')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1341_5428)">
<path d="M17.4349 10.3894V5.84746C17.4349 5.71746 17.3749 5.59734 17.2899 5.50231L12.1977 0.15509C12.1027 0.0551147 11.9676 0 11.8326 0H3.75915C2.26868 0 1.07812 1.21545 1.07812 2.70611V17.9725C1.07812 19.4632 2.26868 20.6587 3.75915 20.6587H10.1319C11.3373 22.6595 13.5284 24 16.0243 24C19.8158 24 22.9121 20.9187 22.9121 17.1222C22.9173 13.8058 20.5362 11.0347 17.4349 10.3894ZM12.3329 1.7558L15.7492 5.35217H13.5333C12.873 5.35217 12.3329 4.80706 12.3329 4.14678V1.7558ZM3.75915 19.6582C2.82385 19.6582 2.07861 18.9078 2.07861 17.9725V2.70611C2.07861 1.76568 2.82385 1.00049 3.75915 1.00049H11.3324V4.14678C11.3324 5.36224 12.3179 6.35265 13.5333 6.35265H16.4344V10.2592C16.2845 10.2543 16.1643 10.2392 16.0343 10.2392C14.2886 10.2392 12.683 10.9096 11.4725 11.9601H5.11981C4.8446 11.9601 4.61956 12.1851 4.61956 12.4601C4.61956 12.7353 4.8446 12.9604 5.11981 12.9604H10.5421C10.1869 13.4606 9.89171 13.9609 9.66173 14.5111H5.11981C4.8446 14.5111 4.61956 14.7361 4.61956 15.0113C4.61956 15.2864 4.8446 15.5116 5.11981 15.5116H9.33654C9.21148 16.0118 9.14647 16.567 9.14647 17.1222C9.14647 18.0225 9.32152 18.9129 9.63665 19.6633H3.75915V19.6582ZM16.0294 23.0046C12.7881 23.0046 10.1519 20.3684 10.1519 17.1271C10.1519 13.8858 12.7829 11.2496 16.0294 11.2496C19.2757 11.2496 21.9067 13.8858 21.9067 17.1271C21.9067 20.3684 19.2707 23.0046 16.0294 23.0046Z" fill="#03A9F4"/>
<path d="M5.11938 10.4536H10.1865C10.4617 10.4536 10.6867 10.2284 10.6867 9.95337C10.6867 9.67816 10.4617 9.45312 10.1865 9.45312H5.11938C4.84418 9.45312 4.61914 9.67816 4.61914 9.95337C4.61914 10.2284 4.84418 10.4536 5.11938 10.4536Z" fill="#03A9F4"/>
<path d="M16.3846 13.4354C16.2896 13.3354 16.1596 13.2754 16.0195 13.2754C15.8794 13.2754 15.7494 13.3354 15.6544 13.4354L12.723 16.5817C12.533 16.7819 12.548 17.1019 12.7481 17.287C12.9483 17.4771 13.2733 17.4621 13.4633 17.2621L15.5342 15.0462V20.5084C15.5342 20.7836 15.7593 21.0087 16.0345 21.0087C16.3095 21.0087 16.5347 20.7836 16.5347 20.5084V15.0462L18.5905 17.2621C18.6906 17.3671 18.8206 17.4222 18.9558 17.4222C19.0757 17.4222 19.1958 17.3771 19.2958 17.287C19.4959 17.097 19.5109 16.7819 19.3209 16.5817L16.3846 13.4354Z" fill="#03A9F4"/>
</g>
<defs>
<clipPath id="clip0_1341_5428">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
</div>
  <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">Zahtjevi</span>
</Link>



            <Link :href="route('skijasi.commerce-theme.order')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
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
</svg></div>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Povijest plaćanja</span>
            </Link>



            <Link :href="route('skijasi.commerce-theme.zaduzenja')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_1338_3683)">
    <path d="M22.9088 12.1007V8.7275C22.9088 7.5837 22.0216 6.6535 20.9006 6.56329L17.7681 1.09179C17.4778 0.585754 17.009 0.224073 16.4481 0.0738875C15.8899 -0.0752748 15.3061 0.00306481 14.8064 0.293873L4.06783 6.5457H2.1818C0.97853 6.5457 0 7.52418 0 8.7275V21.8182C0 23.0215 0.978478 24 2.1818 24H20.727C21.9302 24 22.9088 23.0215 22.9088 21.8182V18.445C23.5423 18.2191 23.9996 17.6194 23.9996 16.9092V13.6365C23.9996 12.9263 23.5423 12.3266 22.9088 12.1007ZM19.633 6.5457H14.8789L18.4445 4.4698L19.633 6.5457ZM17.9025 3.52313L12.7108 6.5457H10.5573L17.3641 2.5827L17.9025 3.52313ZM15.3556 1.23666C15.6022 1.0923 15.8904 1.05395 16.1658 1.12748C16.4444 1.20204 16.6766 1.38209 16.821 1.63403L16.8221 1.63603L8.38935 6.5457H6.23598L15.3556 1.23666ZM21.8178 21.8182C21.8178 22.4196 21.3283 22.9091 20.727 22.9091H2.1818C1.58045 22.9091 1.09093 22.4196 1.09093 21.8182V8.7275C1.09093 8.12615 1.58045 7.63663 2.1818 7.63663H20.727C21.3283 7.63663 21.8178 8.12615 21.8178 8.7275V12.0002H18.5452C16.7405 12.0002 15.2725 13.4682 15.2725 15.2728C15.2725 17.0775 16.7405 18.5455 18.5452 18.5455H21.8178V21.8182ZM22.9088 16.9092C22.9088 17.2101 22.6643 17.4546 22.3633 17.4546H18.5452C17.3419 17.4546 16.3634 16.4762 16.3634 15.2728C16.3634 14.0696 17.3418 13.091 18.5452 13.091H22.3633C22.6642 13.091 22.9088 13.3355 22.9088 13.6365V16.9092Z" fill="black"/>
    <path d="M18.545 14.1816C17.9436 14.1816 17.4541 14.6712 17.4541 15.2725C17.4541 15.8739 17.9436 16.3634 18.545 16.3634C19.1463 16.3634 19.6358 15.8739 19.6358 15.2725C19.6359 14.6712 19.1464 14.1816 18.545 14.1816Z" fill="black"/>
  </g>
  <defs>
    <clipPath id="clip0_1338_3683">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg></div>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Zaduženja</span>
            </Link>
            <Link v-if="user.userType !== 'Običan Korisnik'" :href="route('skijasi.commerce-theme.mojstatus')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 16V12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 8H12.01" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Moj Status</span>
            </Link>
         

            <div class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
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
</svg> </div>             <span @click="() => logout()" class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Odjavi se</span>
            </div>
          </div>
        </div>  </div>
<!--1-->




<div class="bg-white shadow-sm px-6 rounded-xl ml-16 pb-8">
          <!--2-->
          <div class="h-22 flex flex-col py-4 justify-center border-plava-200 border-b">
            <span class="text-lg font-medium plavi-text">Zahtjevi</span>
          </div>
       
 




          <template>
  <div class="zahtjevi-root">
    <div class="badge-1-parent">
      <div class="badge-1">
        <img class="group-icon1" loading="lazy" alt="" src="/storage/slike/zahtjeviprofil/zahtjevi-group.svg" />
      </div>
      <a class="amblem">Amblem</a>
      <div class="zatrai-zahtjev-za text-center">Zatraži zahtjev za amblem</div>
      <button class="zatrai-wrapper" @click="dodajkupnju(10)">
        <div class="zatrai">Zatraži</div>
      </button>
    </div>
    <div class="credit-card-1-parent">
      <div class="credit-card-1">
        <img class="vector-icon5" alt="" src="/storage/slike/zahtjeviprofil/zahtjevi-vector1.svg" />
        <img class="vector-icon6" alt="" src="/storage/slike/zahtjeviprofil/zahtjevi-vector-1.svg" />
      </div>
      <a class="iskaznica">Iskaznica</a>
      <div class="zatrai-zahtjev-za1 text-center">
        Zatraži zahtjev za izdavanje iskaznice
      </div>
      <button class="zatrai-container" @click="dodajkupnju(12)">
        <div class="zatrai1">Zatraži</div>
      </button>
    </div>
    <div class="frame-parent46">
      <div class="frame1">
        <img class="vector-icon7" alt="" src="/storage/slike/zahtjeviprofil/zahtjevi-vector-2.svg" />
        <img class="vector-icon8" loading="lazy" alt="" src="/storage/slike/zahtjeviprofil/zahtjevi-vector-3.svg" />
        <img class="vector-icon9" loading="lazy" alt="" src="/storage/slike/zahtjeviprofil/zahtjevi-vector-4.svg" />
      </div>
      <a class="potvrda">Potvrda</a>
      <div class="zatrai-zahtjev-za2 text-center">Zatraži zahtjev za izdavanje potvrde</div>
      <button class="zatrai-frame"  @click="dodajkupnju(11)">
        <div class="zatrai2">Zatraži</div>
      </button>
    </div>
  </div>
</template>



 </div>







      </div>
    </div>


  <!--1-->
  <transition name="fade">
     <div class="Moj-pr-8" v-if="isGridVisible && !isSidebarExpanded">

<div :class="{'h-22 flex items-center': true, 'border-b': isSidebarExpanded, 'border-plava-200': !isSidebarExpanded, 'sakrij': true}">


  <div v-if="isSidebarExpanded" class="border-plava-200 border-2 rounded-full"> <!-- New container with border -->
  <div class="h-14 w-14 items-center justify-center clip-circle sidebar-item sidebar-icon">
    <img :src="user.avatar" alt="User's avatar" class="object-cover h-14 w-14">
  </div>  </div>
  <div class="inline-block flex-wrap pl-2">
    <div v-if="isSidebarExpanded" class="text-sm font-bold w-full line-clamp-2 ">{{ user.name }} {{ user.username }}</div>
  
  </div>
</div>

<div :class="['sidebar', { 'sidebar-open': isSidebarOpen, 'sidebar-closed': !isSidebarOpen }]">

<div class="mt-4 flex items-center gap-y-3 flex-wrap sidebarClasses ">

  <div v-if="!isSidebarExpanded" class="h-10 w-10 items-center justify-center clip-circle sidebar-icon sidebar-avatar">
    <img :src="user.avatar" alt="User's avatar" class="object-cover h-10 w-10">
  </div> 

  <Link :href="route('skijasi.commerce-theme.profile')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Moj Profil</span>
  </Link>
  <!--
  <Link :href="route('skijasi.commerce-theme.address')" class="w-full inline-flex items-center group">
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2">Adresa i Suputnici</span>
  </Link>-->
  <Link :href="route('skijasi.commerce-theme.change-password')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M21.0003 2L19.0003 4M19.0003 4L22.0003 7L18.5003 10.5L15.5003 7.5M19.0003 4L15.5003 7.5M11.3903 11.61C11.9066 12.1195 12.3171 12.726 12.598 13.3948C12.879 14.0635 13.0249 14.7813 13.0273 15.5066C13.0297 16.232 12.8887 16.9507 12.6122 17.6213C12.3357 18.2919 11.9293 18.9012 11.4164 19.4141C10.9035 19.9271 10.2942 20.3334 9.62358 20.6099C8.95296 20.8864 8.23427 21.0275 7.50891 21.025C6.78354 21.0226 6.06582 20.8767 5.39707 20.5958C4.72831 20.3148 4.12174 19.9043 3.61227 19.388C2.6104 18.3507 2.05604 16.9614 2.06857 15.5193C2.0811 14.0772 2.65953 12.6977 3.67927 11.678C4.69902 10.6583 6.07849 10.0798 7.52057 10.0673C8.96265 10.0548 10.352 10.6091 11.3893 11.611L11.3903 11.61ZM11.3903 11.61L15.5003 7.5" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Promjena lozinke</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.notification')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
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
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text"   :class="{ 'text-yellow-500 ': hasUnreadMessages, 'text-gray-700': !hasUnreadMessages }">Obavijesti</span>
  </Link>

  <Link :href="route('skijasi.commerce-theme.zahtjevi')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1341_5428)">
<path d="M17.4349 10.3894V5.84746C17.4349 5.71746 17.3749 5.59734 17.2899 5.50231L12.1977 0.15509C12.1027 0.0551147 11.9676 0 11.8326 0H3.75915C2.26868 0 1.07812 1.21545 1.07812 2.70611V17.9725C1.07812 19.4632 2.26868 20.6587 3.75915 20.6587H10.1319C11.3373 22.6595 13.5284 24 16.0243 24C19.8158 24 22.9121 20.9187 22.9121 17.1222C22.9173 13.8058 20.5362 11.0347 17.4349 10.3894ZM12.3329 1.7558L15.7492 5.35217H13.5333C12.873 5.35217 12.3329 4.80706 12.3329 4.14678V1.7558ZM3.75915 19.6582C2.82385 19.6582 2.07861 18.9078 2.07861 17.9725V2.70611C2.07861 1.76568 2.82385 1.00049 3.75915 1.00049H11.3324V4.14678C11.3324 5.36224 12.3179 6.35265 13.5333 6.35265H16.4344V10.2592C16.2845 10.2543 16.1643 10.2392 16.0343 10.2392C14.2886 10.2392 12.683 10.9096 11.4725 11.9601H5.11981C4.8446 11.9601 4.61956 12.1851 4.61956 12.4601C4.61956 12.7353 4.8446 12.9604 5.11981 12.9604H10.5421C10.1869 13.4606 9.89171 13.9609 9.66173 14.5111H5.11981C4.8446 14.5111 4.61956 14.7361 4.61956 15.0113C4.61956 15.2864 4.8446 15.5116 5.11981 15.5116H9.33654C9.21148 16.0118 9.14647 16.567 9.14647 17.1222C9.14647 18.0225 9.32152 18.9129 9.63665 19.6633H3.75915V19.6582ZM16.0294 23.0046C12.7881 23.0046 10.1519 20.3684 10.1519 17.1271C10.1519 13.8858 12.7829 11.2496 16.0294 11.2496C19.2757 11.2496 21.9067 13.8858 21.9067 17.1271C21.9067 20.3684 19.2707 23.0046 16.0294 23.0046Z" fill="#03A9F4"/>
<path d="M5.11938 10.4536H10.1865C10.4617 10.4536 10.6867 10.2284 10.6867 9.95337C10.6867 9.67816 10.4617 9.45312 10.1865 9.45312H5.11938C4.84418 9.45312 4.61914 9.67816 4.61914 9.95337C4.61914 10.2284 4.84418 10.4536 5.11938 10.4536Z" fill="#03A9F4"/>
<path d="M16.3846 13.4354C16.2896 13.3354 16.1596 13.2754 16.0195 13.2754C15.8794 13.2754 15.7494 13.3354 15.6544 13.4354L12.723 16.5817C12.533 16.7819 12.548 17.1019 12.7481 17.287C12.9483 17.4771 13.2733 17.4621 13.4633 17.2621L15.5342 15.0462V20.5084C15.5342 20.7836 15.7593 21.0087 16.0345 21.0087C16.3095 21.0087 16.5347 20.7836 16.5347 20.5084V15.0462L18.5905 17.2621C18.6906 17.3671 18.8206 17.4222 18.9558 17.4222C19.0757 17.4222 19.1958 17.3771 19.2958 17.287C19.4959 17.097 19.5109 16.7819 19.3209 16.5817L16.3846 13.4354Z" fill="#03A9F4"/>
</g>
<defs>
<clipPath id="clip0_1341_5428">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
</div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">Zahtjevi</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.order')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
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
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Povijest plaćanja</span>
  </Link>



  <Link :href="route('skijasi.commerce-theme.zaduzenja')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<g clip-path="url(#clip0_1338_3683)">
<path d="M22.9088 12.1007V8.7275C22.9088 7.5837 22.0216 6.6535 20.9006 6.56329L17.7681 1.09179C17.4778 0.585754 17.009 0.224073 16.4481 0.0738875C15.8899 -0.0752748 15.3061 0.00306481 14.8064 0.293873L4.06783 6.5457H2.1818C0.97853 6.5457 0 7.52418 0 8.7275V21.8182C0 23.0215 0.978478 24 2.1818 24H20.727C21.9302 24 22.9088 23.0215 22.9088 21.8182V18.445C23.5423 18.2191 23.9996 17.6194 23.9996 16.9092V13.6365C23.9996 12.9263 23.5423 12.3266 22.9088 12.1007ZM19.633 6.5457H14.8789L18.4445 4.4698L19.633 6.5457ZM17.9025 3.52313L12.7108 6.5457H10.5573L17.3641 2.5827L17.9025 3.52313ZM15.3556 1.23666C15.6022 1.0923 15.8904 1.05395 16.1658 1.12748C16.4444 1.20204 16.6766 1.38209 16.821 1.63403L16.8221 1.63603L8.38935 6.5457H6.23598L15.3556 1.23666ZM21.8178 21.8182C21.8178 22.4196 21.3283 22.9091 20.727 22.9091H2.1818C1.58045 22.9091 1.09093 22.4196 1.09093 21.8182V8.7275C1.09093 8.12615 1.58045 7.63663 2.1818 7.63663H20.727C21.3283 7.63663 21.8178 8.12615 21.8178 8.7275V12.0002H18.5452C16.7405 12.0002 15.2725 13.4682 15.2725 15.2728C15.2725 17.0775 16.7405 18.5455 18.5452 18.5455H21.8178V21.8182ZM22.9088 16.9092C22.9088 17.2101 22.6643 17.4546 22.3633 17.4546H18.5452C17.3419 17.4546 16.3634 16.4762 16.3634 15.2728C16.3634 14.0696 17.3418 13.091 18.5452 13.091H22.3633C22.6642 13.091 22.9088 13.3355 22.9088 13.6365V16.9092Z" fill="black"/>
<path d="M18.545 14.1816C17.9436 14.1816 17.4541 14.6712 17.4541 15.2725C17.4541 15.8739 17.9436 16.3634 18.545 16.3634C19.1463 16.3634 19.6358 15.8739 19.6358 15.2725C19.6359 14.6712 19.1464 14.1816 18.545 14.1816Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_1338_3683">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Zaduženja</span>
  </Link>
  <Link v-if="user.userType !== 'Običan Korisnik'" :href="route('skijasi.commerce-theme.mojstatus')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 16V12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 8H12.01" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Moj Status</span>
  </Link>


  <div class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
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
</svg> </div>             <span @click="() => logout()" class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Odjavi se</span>
  </div>
</div> 
</div>  </div> </transition>
<!--1-->



    </div>
    
  
</template>

<script>
import appLayout from '../../layouts/app.vue'
import profileLayout from '../../layouts/profile.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'

import Checkbox from './../../components/form/checkbox.vue'
import Counter from './../../components/counter/counter.vue'
import Carousel from '../../components/carousel/carousel.vue'
import CarouselItem from '../../components/carousel/carousel-item.vue'
import CommerceProductAlt from '../../components/commerce-product-alt.vue'
import CommerceMobileProductAlt from '../../components/commerce-mobile-product-alt.vue'



import poruke from  '../../../../../../core/src/resources/js/api/modules/skijasi-poruke.js';


export default {
  layout: [appLayout, profileLayout],
  components: {
    Checkbox,
    Counter,
    Carousel,
    CarouselItem,
    CommerceProductAlt,
    CommerceMobileProductAlt,
    Link,
    Head
  },
  data() {
    return {
      checkboxModel: [],
      quantity: 1,
      carts: [],
      similarProducts: {
        data: []
      },
      loading: false,
      deleteDialog: false,
      deleteId: null,
      deleteQuantity: null,
      deleteIndex: null,
      variationDialog: false,
      variationId: null,
      variationQuantity: null,
      product: {
        productDetails: []
      },
      productDetailSelectedIndex: 0,
    






      avatar_approved: 0,
      name: '',
      username: '',
      datumrodjenja: '',
      brojmobitela: '',
      drzava: '',
      grad: '',
      postanskibroj: '',
      adresa: '',
      oib: '',
      spol: '',
      email: '',
      avatar: null,
 

      adminMessages: [],
      currentUser: null,
      users: [], 

     isSidebarExpanded: window.innerWidth > 768, // Initialize based on screen width
     isSidebarOpen: false,
     isGridVisible: true, 

     paymentOptions: [
      { value: 'Sve plaćeno', text: 'Plaćena' },
      { value: 'Nije plaćeno', text: 'Nije plaćena' },
      // ... other payment options ...
    ],
    staraPlacanjaArray: [],
    viewingPaymentsList: false, 

    }
  },
  watch: {
    // Watch for changes in the user object and update data properties
    user: {
      handler(newValue) {
        this.prefillData(newValue);
      },
      immediate: true, // Trigger handler immediately with the current value of the expression
      deep: true // Watch for nested changes in the user object
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


    sidebarClasses() {
      return {
        'w-64': this.isSidebarExpanded,
        'w-20': !this.isSidebarExpanded,
        'flex': true,
        'flex-col': true,
        'flex': !this.isSidebarExpanded,
      'items-center': !this.isSidebarExpanded,
      'justify-center': !this.isSidebarExpanded,
      };
  },

  hasUnreadMessages() {
  if (this.adminMessages.length === 0) {
    return false; // Return false if no admin messages are available
  }

  // Check if there are any messages where the current user's ID is not in the 'is_read' array
  return this.adminMessages.some(message => {
    const currentUserId = this.user.id;
    return !message.is_read || !message.is_read.includes(String(this.user.id));
  });
},






filteredCarts() {
    return this.carts.filter(cart => cart.productDetail.product.slug !== 'dogadanja');
  },

    getTotal() {
      if (this.checkboxModel.length <= 0) return 0
      let price = 0
      this.checkboxModel.forEach(val => {
        let cart = this.$_.find(this.carts, { id: val })
        let p = cart.productDetail.discount !== null && cart.productDetail.discount.active == 1
          ? this.getDiscount(cart.productDetail.price, cart.productDetail.discount)
          : cart.productDetail.price
        price += p * cart.quantity
      });
      return price
    },
    getSaving() {
      if (this.checkboxModel.length <= 0) return 0
      let price = 0
      this.checkboxModel.forEach(val => {
        let cart = this.$_.find(this.carts, { id: val })
        let p = cart.productDetail.discount !== null && cart.productDetail.discount.active == 1
          ? this.getDiscount(cart.productDetail.price, cart.productDetail.discount)
          : cart.productDetail.price
        price += cart.productDetail.price - p
      });
      return Math.ceil(price / 1000)
    },
    hasActiveDiscount() {
      return this.product.productDetails[this.productDetailSelectedIndex].discount !== null
        ? this.product.productDetails[this.productDetailSelectedIndex].discount.active === 1
        : false
    },
    getImageSource() {
      return this.product.productDetails[this.productDetailSelectedIndex].productImage || null
    },
    activePrice() {
      return this.product.productDetails[this.productDetailSelectedIndex].price || 0
    },
    activeDiscount() {
      return this.product.productDetails[this.productDetailSelectedIndex].discount.active === 1
        ? this.product.productDetails[this.productDetailSelectedIndex].discount
        : null
    },
    activeStock() {
      return this.product.productDetails[this.productDetailSelectedIndex].quantity || 0
    }


  
},
created() {
    this.fetchAdminMessages();
  },

  mounted() {
    if (!this.isAuthenticated) {
      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    };


    window.addEventListener('scroll', this.handleScrollAttempt);
  
    this.getCarts();
  },

  beforeDestroy() {
    // Remove event listener when component is destroyed
    window.removeEventListener('scroll', this.handleScrollAttempt);

  },
  methods: {

        dodajkupnju(zahtjevid) {


              this.$api.skijasiCart
                .add({
                  id: zahtjevid,
                  quantity: 1,
                })
                .then(res => {
                  // this.$store.dispatch('FETCH_CARTS')
                  this.$helper.alert('Uspješno dodano u plaćanje')
                  
                  this.$inertia.visit(this.route('skijasi.commerce-theme.zaduzenja'))
                })
                .catch(err => {
                  // this.$helper.displayErrors(err)
                });

        },






    fetchAdminMessages() {
      poruke.getMessages()
      .then((response) => {
      console.log("API Response:", response);
      if (response) {
        console.log("Response Data:", response);
        // Filter messages where message.sent_to contains this user.id or "svi"
        const filteredMessages = response.filter(message => {
          return message.sent_to.includes(String(this.user.id)) || message.sent_to.includes("svi");
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



    handleScrollAttempt(event) {
      if (event.deltaY !== 0) { // deltaY is non-zero if there's an attempt to scroll
        this.isGridVisible = false;
      }
    },

    toggleGridVisibility(event) {
    if (event.type === 'touchend') {
      this.touchHandled = true;
      this.isGridVisible = !this.isGridVisible;
    } else if (event.type === 'click' && !this.touchHandled) {
      this.isGridVisible = !this.isGridVisible;
    }
    // Reset the flag after the click event is processed
    if (event.type === 'click') {
      this.touchHandled = false;
    }
  },

    toggleSidebar() {
      this.isSidebarOpen = !this.isSidebarOpen;
      console.log('isSidebarOpen:', this.isSidebarOpen);
    },


    toggleSidebarExpansion() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },



formatDate(dateString) {
    if (!dateString) return ''; // Handle null, undefined, or empty strings
    const date = new Date(dateString);
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0'); // +1 because months are 0-indexed
    const year = date.getFullYear();
    return `${day}.${month}.${year}.`;
  },






    toggleSidebarExpansion() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },


    prefillData(user) {
      if (user) {
        this.name = user.name || '';
        this.username = user.username || '';
        this.email = user.email || '';
        this.datumrodjenja = user.datumrodjenja || '';
        this.brojmobitela = user.brojmobitela || '';
        this.drzava = user.drzava || '';
        this.grad = user.grad || '';
        this.postanskibroj = user.postanskibroj || '';
        this.adresa = user.adresa || '';
        this.oib = user.oib || '';
        this.spol = user.spol || '';
        this.avatar = user.avatar || null;
        this.avatar_approved = user.avatarApproved ? 1 : 0;   

      }
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
    },






    checkout() {
      if (this.checkboxModel.length <= 0) {
        this.$helper.alert('Molimo odaberite barem jedan od artikala!')
        return
      }

      this.$openLoading()
      let carts = []

      this.checkboxModel.forEach(val => {
        carts.push({ ...this.$_.find(this.carts, { id: val }) })
      });

      this.$store.dispatch('SET_CHECKOUT', carts)

      this.$closeLoading()
      this.$inertia.visit(this.route('skijasi.commerce-theme.checkout'))
    },
    getCarts() {
      this.$api.skijasiCart
        .browse()
        .then(res => {
          this.carts = res.data.carts
          this.checkboxModel = this.carts.map(cart => cart.id);

          if (this.carts.length > 0) {
            this.fetchSimilar(this.$_.take(res.data.carts)[0])
          }
        })
        .catch(err => {
          localStorage.removeItem('token')
          this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
          this.$helper.displayErrors(err)
        })
    },
    fetchSimilar(cart) {
      this.$api.skijasiProduct
        .browseByCategorySlug({
          slug:  cart.productDetail.product.productCategory.slug
        })
        .then(res => {
          this.similarProducts = res.data.products
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
    deleteCart(id) {
      this.$api.skijasiCart
        .delete({
          id
        })
        .then(res => {
          this.getCarts()
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
    deleteCartUsingState() {
      this.$api.skijasiCart
        .delete({
          id: this.deleteId
        })
        .then(res => {
          this.getCarts()
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
        .finally(() => {
          this.deleteDialog = false
        })
    },
    openDeleteDialog($event, { id, quantity }, index) {
      if ($event <= 1) {
        this.deleteDialog = true
        this.deleteId = id
        this.deleteQuantity = quantity
        this.deleteIndex = index
      }
    },
    closeDeleteDialog() {
      this.carts[this.deleteIndex].quantity = this.deleteQuantity
      this.deleteDialog = false
    },
    changeQuantity(val, id) {
      if (val && val > 0) {
        this.loading = true
        this.$api.skijasiCart
          .edit({
            id,
            quantity: val
          })
          .then(res => {
            this.getCarts()
          })
          .catch(err => {
            this.$helper.displayErrors(err)
          })
          .finally(() => {
            this.loading = false
          })
      }
    },
    getDiscount(price, discount) {
      let d = 0
      if (discount.discountType === 'fixed') {
        d = discount.discountFixed;
      } else {
        d = discount.discountPercent * price / 100
      }
      return parseInt(price - d)
    },
    checkAll($event) {
      if ($event.target.checked) {
        this.carts.forEach(cart => {
          if (!this.checkboxModel.includes(cart.id)) {
            this.checkboxModel.push(cart.id)
          }
        });
      } else {
        this.checkboxModel = []
      }
    },
    openVariationDialog({ id, quantity, productDetail: { productId }, productDetailId }) {
      this.$api.skijasiProduct
        .readByCart({ id: productId })
        .then(res => {
          this.product = res.data.product
          this.variationDialog = true
          this.variationId = id
          this.variationQuantity = quantity
          this.productDetailSelectedIndex = this.product.productDetails.indexOf(this.$_.find(this.product.productDetails, { id: productDetailId }))
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
    confirmVariationDialog() {
      this.loading = true
      this.$api.skijasiCart
        .editCart({
          id: this.variationId,
          productDetailId: this.product.productDetails[this.productDetailSelectedIndex].id,
          quantity: this.variationQuantity
        })
        .then(res => {
          this.getCarts()
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
        .finally(() => {
          this.loading = false
          this.variationDialog = false
        })
    },
    closeVariationDialog() {
      this.variationDialog = false
    },
    getDiscountedPrice(price, discount) {
      let d = 0
      if (discount.discountType === 'fixed') {
        d = discount.discountFixed;
      } else {
        d = discount.discountPercent * price / 100
      }
      return this.$currency(price - d)
    },
    clickProductDetail(index) {
      this.productDetailSelectedIndex = index
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

.border-transparent {
  border-color: transparent;
}


.avatardesni{
    height: 10rem;
    width: 10rem;
}

.tekstzainpute {
  color: #000;
text-align: left;
font-family: Inter;
font-size: 14px;
font-style: normal;
font-weight: 500;
line-height: normal; 
padding-left: 12px;
}

.no-payments {
  /* Add your styles here */
  text-align: center;
  padding: 20px;
  font-size: 1rem;
  color: #666;
}


/* fab gumb */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0;
}

.fab {
    position: fixed;
    top: 10%;
    left: 6px;
    background-color: #fff;
    box-shadow: 3px 4px 6px -1px rgba(0, 0, 0, 0.1), 3px 2px 4px -1px rgba(0, 0, 0, 0.06); /* Optional: add a subtle shadow if needed */

    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    transition: transform 0.3s ease-in-out, background-color 0.3s;
  }


  .fab-icon {
    /* Center the icon in the button */
    display: none;

    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease-in-out;
    position: relative;
  }

  /* Rotate the SVG to form an "X" when the sidebar is open */
 /* Initial state for the SVG lines */
.fab-icon svg rect {
  transition: transform 0.3s ease, opacity 0.3s ease;
}

 
/* Hide the middle bar */
.fab-icon.icon-active svg rect:nth-child(2) {
  opacity: 0;
  transition: opacity 0s ease; /* This will make the middle bar disappear immediately */
}

/* Transform the bottom bar */
.fab-icon.icon-active svg rect:nth-child(3) {
  transform: translateY(16px) rotate(-45deg);
}
.fab-icon {
    /* Center the icon in the button */
    display: flex;
  }

.fab {
    /* existing styles... */
    transition: transform 0.7s ease-in-out, background-color 0.7s;
}

.fab-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease-in-out;
    width: 35px;

}

.fab-icon svg rect {
    transition: transform 0.7s ease, opacity 0.7s ease;
}

.fab-icon.icon-active svg rect:nth-child(1) {
  -webkit-transform: rotate(-45deg) translate(-50px, 40px);
  transform: rotate(-45deg) translate(-54px, 40px);
}

.fab-icon.icon-active svg rect:nth-child(2) {
    opacity: 0;
}

.fab-icon.icon-active svg rect:nth-child(3) {
  -webkit-transform: rotate(45deg) translate(-5px, -6px);
  transform: rotate(45deg) translate(24px, -60px);
}

/* fab gumb kraj */



@media (max-width: 1024px) {

  .avatardesni {
    height: 5rem;
    width: 5rem; }

}

@media (max-width: 767px) {
  .moj-pr-8 {
  top: 25% !important;
}

.sidebar-closed {
  top: 25% !important;
  position: fixed !important;
}
.container2{
top: 10% !important;
}
.ml-16{
  margin-left: 1rem !important;
   margin-top: 12% !important;
}
  
  .navbar {
    padding-top: 0rem; 
  }


  .sidebar:hover {
  width: 200px; /* Adjust the width as needed to fit the text */
  background-color: #ffffff; /* Or any color you want for the hover background */
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Optional: add a subtle shadow if needed */
  justify-content: flex-start;
}


.sidebar:hover .sidebar-item .sidebar-text {
  display: inline; /* Show the text */
  opacity: 1; /* Make text fully opaque */
  transition: opacity 0.9s ease;
  white-space: nowrap; /* Prevent text wrapping */
}

  .sidebar-item {
  padding: 0.5rem 1rem; /* Adjust padding to control spacing */
  transition: color 0.6s;
  justify-content: flex-start; 
  
}

.sidebar-item:hover .sidebar-text {
  color: #03A9F4; /* Change color on hover */
}


.sidebar-closed .sidebar-text {
  display: none;
}
.sidebar-open .sidebar-text {
  display: inline;
  justify-content: flex-start;
}


.sidebar-closed .sidebar-avatar {
  margin: auto !important;
}

.sidebar-open .sidebar-icon, .sidebar-closed .sidebar-icon {
  display: flex-start;
  justify-content: center;
  align-items: center;
  height: 100%; /* Ensure the full height for vertical centering */

  margin-left: 0; /* This aligns the icon to the left */
  margin-right: 0;
}


.sidebar-text {
  opacity: 0;
  white-space: nowrap; 
  transition: opacity 0.7s ease, transform 0.9s ease;
}


.sidebar {
position: fixed;
height: auto;
transition: width 0.3s ease;  /* Smooth transition */
  z-index: 2210; /* Above other content */
  background-color: #ffffff; /* Add a white background */
  border-radius: 1rem; /* Add rounded corners */
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* Optional: add a subtle shadow */


}

.sidebar-expanded .user-details {
  display: block;
}

.sidebar-open {
  width: 150px;/* Show sidebar */
  transition: width 0.4s ease;
}

.sidebar-closed {
  width: 60px; /* Allow the sidebar to shrink to fit the icons */
  padding: 0.3rem; /* Provide some padding around the icons */
  transition: width 0.4s ease;
}




  .sakrij {
    /*  display: none; This will hide the element on small screens */
width: 80px;
  }
.grid-cols-profile {
    grid-template-columns: 90% auto;
  }
  

  .user-info {
    display: none;
  }
  


  

}
@media (min-width: 768px) {
  /* .navbar .container {
    grid-template-columns: max-content 1fr;
  } */

  .mojgrid-cols-profile{
  grid-template-columns: 200px 1fr;
}
  .moj-pr-8 {
  padding-right: 0rem/* 32px */;
}

.sidebar-closed {
    background: none; /* Remove background */
    width: 250px; /* Adjust width as needed */
    justify-content: left;
  align-items: left;
  }

  .sidebar-closed .sidebar-icon {
    display: inline-block; /* Display icons inline with text */
    margin-right: 8px; /* Space between icon and text */
  }

  .sidebar-closed .sidebar-text {
    display: inline; /* Show text next to icons */
    white-space: nowrap; /* Prevent text wrapping */
  }
  
  /* You may need to adjust the hover effect to change the text color correctly */
  .sidebar-closed .sidebar-item:hover .sidebar-text {
    color: #03A9F4; /* Change text color on hover */
  }
  


}




@media (max-width: 550px) {
  .border-l {
   /* Hide the border div */
   border-left-width: 0px;

  }
  .grid-cols-3 {
    display: flex;
    flex-direction: column;
  }

  /* This will make sure the profile content section appears first */
  .profile-content {
    order: -1;
  }

  /* Assuming 'profile-info' is the class for the <!--2--> section */
  .profile-info {
    order: 1;
  }
   /* You may want to adjust the width and padding of the content sections as well */
   .profile-content, .profile-info {
    width: 100%;
    max-width: none;
    padding: 1rem;
  }

}





.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 0.5s ease;
}
.slide-fade-enter, .slide-fade-leave-to {
  transform: translateX(100%);
  opacity: 0.8;
}


.pagination button.active {
  background-color: #03a9f4;
  color: white;
}
.pagination button.separator {
  background: none;
  border: none;
  pointer-events: none;
}

.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
  grid-gap: 60px;
  grid-row-gap: 90px;
  width: 100%;


max-width: 1500px;

  justify-content: center;
  align-items: stretch;


}
.grid-wrapper {
  display: flex;
  justify-content: center;
  padding: 0 4%; /* Adjust padding as needed */
    margin-bottom: 5.9%;
}








  .filteriframeglavni-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    background-color: #fff;
    width: 100%;
    height: 14.81rem;
  }
  .strokeframe-child {
    position: relative;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 14.75rem;
    height: 1.88rem;
  }
  .strokeframe {
    width: 14.75rem;
    height: 2.25rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .frame1 {
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }
  .odaberi-podrune-zborove {
    position: relative;
  }
  .tekstokdaberizborframe {
    position: absolute;
    top: 0rem;
    left: 0.06rem;
    width: 13.06rem;
    height: 1.6rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
  }
  .strelicapremadolje-icon {
    position: absolute;
    top: 0.39rem;
    left: 84%;
    width: 0.75rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .strelicapremadolje-icon2 {
    position: absolute;
    top: 0.39rem;
    left: 84%;
    width: 0.75rem;
    height: 1.13rem;
    overflow: hidden;
  }
  .odaberizbor {
    flex: 1;
    position: relative;
    height: 21.5rem;
    overflow: hidden;
    margin-left: -14rem;
  }
  .odaberipodrucnizbor {
    width: 15.13rem;
    height: 2.25rem;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
  }
  .status {
    position: relative;
    opacity: 0.2;
  }
  .chevron-right-1-icon {
    position: relative;
    width: 0.75rem;
    height: 0.75rem;
    overflow: hidden;
    flex-shrink: 0;
    opacity: 0.2;
  }
  .statusfilter {
    border: 1px solid rgba(3, 169, 244, 0.4);
    box-sizing: border-box;
    width: 6.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0rem 0.44rem 0.75rem;
    gap: 1.63rem;
  }
  .chevron-right-1-icon1 {
    position: relative;
    width: 0.75rem;
    height: 0.75rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .clanarinefilter {
    border: 1px solid rgba(3, 169, 244, 0.4);
    box-sizing: border-box;
    width: 6.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0.44rem 0.44rem 0.75rem;
    gap: 0.38rem;
  }
  .gradovifilter {
    border: 1px solid rgba(3, 169, 244, 0.4);
    box-sizing: border-box;
    width: 6.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0rem 0rem 0.44rem 0.75rem;
    gap: 1.06rem;
  }
  .filteritraka {
    position: absolute;
    top: 10.75rem;
    left: 3.75rem;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    
    padding: 0.63rem 10rem 0.63rem 0.63rem;
    gap: 1.63rem;
    
    justify-content: space-between; 
  }
  .frame2 {
    background-color: #73d2f6;
    width: 1.25rem;
    height: 1.25rem;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  .nije-plaena {
    position: relative;
    font-weight: 600;
  }
  .nijeplaceno {
    width: 6.38rem;
    height: 1.25rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .placenaodabir-child {
    position: relative;
    border: 1px solid #73d2f6;
    box-sizing: border-box;
    width: 1.25rem;
    height: 1.25rem;
  }
  .plaena {
    position: relative;
    font-weight: 600;
    opacity: 0.2;
  }
  .placenaodabir {
    width: 4.75rem;
    height: 1.25rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 0.63rem;
  }
  .meniizbor {
    position: absolute;
    top: 13.45rem;
    left: 29rem;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.2);
    width: 11.19rem;
    height: 5.31rem;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0.94rem 0.94rem 0rem;
    box-sizing: border-box;
    gap: 0.94rem;
    font-size: 0.75rem;
    z-index: 2000;
  }





  .clear-icon {
  cursor: pointer;
  position: absolute;
  right: 10px; /* Adjust the value as needed */
  z-index: 10;
  /* Other styling as needed, e.g., color, font size, etc. */
}



  
  .input-wrapper {

  display: flex;
  align-items: center;
  width: 24.13rem;
    height: 2.35rem;
    position: relative;
  flex-grow: 1; /* Let the input grow to fill the space */
  border: none; /* Remove border if not needed */
  outline: none; /* Remove default focus outline */
  padding-right: 30px; /* Add padding to prevent text from going under the 'X' */
}

.input-icon {
  position: absolute;
  left: 10px; /* Adjust the value as needed */
  z-index: 10;
  fill: #fff; /* Color of the icon */
}

  .pretrazivanjepoimenu {
    border: 2px solid #03a9f4;
    font-weight: 300;
    font-family: Inter;
    font-size: 1rem;
    overflow: visible !important;
    background-color: transparent;
    position: absolute;
    top: 4.44rem;
    left: 3.75rem;
    border-radius: 10px;
    box-sizing: border-box;
    width: 24.13rem;
    height: 2.75rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    padding: 0.63rem 2.5rem 0.63rem 2.81rem;
  }
  .filteriframeglavni-item {
    position: absolute;
    top: 9.41rem;
    left: 3.72rem;
    border-top: 1px solid rgba(3, 169, 244, 0.3);
    box-sizing: border-box;
    width: 82.56rem;
    height: 0.06rem;
  }
  .chevron-right-1-icon4 {
    position: relative;
    width: 0.75rem;
    height: 0.75rem;
    opacity: 0.2;
  }
  .prikaz-group {
    position: absolute;
    top: 4.88rem;
    right: 3.75rem;
    border: 1px solid rgba(3, 169, 244, 0.5); 
    box-sizing: border-box;
    width: 3.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0.44rem 0rem 0.44rem 0.75rem;
    gap: 1.75rem;
  }
  .popis-lanova-hzuts-a {
    position: absolute;
    top: 1.25rem;
    left: 3.75rem;
    font-size: 1.5rem;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    width: 19.44rem;
  }
  .arrow-1-icon {
    position: relative;
    width: 1rem;
    height: 1rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .poniti-sve {
    position: relative;
    font-size: 0.75rem;
    font-family: Inter;
    color: #000;
    text-align: left;
  }
  .ponistigumb:active {
  transform: scale(0.95); /* Slightly reduce the button size when clicked */
  background-color: #ececec; /* Change background color when clicked */
}
  .ponistigumb {
    transition: transform 0.2s ease-in-out, background-color 0.2s ease-in-out;

    cursor: pointer;
    border: none;
    padding: 0;
    background-color: transparent;
    position: absolute;
    height: 4.22%;
    top: 72%;
    right: 4.31rem;
    bottom: 45.65%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0.63rem;
  }
  .filteriframeglavni {
    align-self: stretch;
    position: relative;
    height: 17rem;
  }
  .frame-icon {
    align-self: stretch;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    height: 13.75rem;
    flex-shrink: 0;
  }
  .franjo-ml-jardas {
    position: absolute;
    top: 0rem;
    left: calc(50% - 83px);
  }
  .demostrator-skijanja {
    position: absolute;
    top: 1.81rem;
    left: calc(50% - 61px);
    font-size: 0.75rem;
    color: #03a9f4;
  }
  .frame4 {
    position: absolute;
    top: 5.25rem;
    left: 2.81rem;
    width: 5.63rem;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #68c471;
  }
  .span {
    color: #03a9f4;
  }
  .licenca-vrijedi-do-container {
    position: absolute;
    top: 3.06rem;
    left: calc(50% - 90px);
    font-size: 0.75rem;
    font-weight: 600;
  }
  .frame3 {
    position: relative;
    width: 11.25rem;
    height: 6.75rem;
    overflow: hidden;
    flex-shrink: 0;
  }
  .kartica-clana {
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0px 4px 4px rgba(3, 169, 244, 0.2);
    width: 20rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 2.53rem 0.63rem;
    box-sizing: border-box;
    gap: 0.88rem;
  }
  .containerkartica {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 0rem 3.25rem;
    margin-top: -2.5rem;
    font-size: 1.25rem;
  }
  .frame {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;

    padding-bottom: 3rem;
  }
  .stroke-1-icon {
    position: relative;
    width: 1.19rem;
    height: 1.19rem;
  }
  .frame-child {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    width: 2.19rem;
    height: 2.19rem;
  }
  .div {
    position: absolute;
    top: 0.19rem;
    left: 0.88rem;
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .ellipse-parent {
    position: relative;
    width: 2.19rem;
    height: 2.19rem;
  }
  .frame-item {
    position: absolute;
    top: 0rem;
    left: 0rem;
    border-radius: 50%;
    background-color: #03a9f4;
    width: 2.19rem;
    height: 2.19rem;
  }
  .div1 {
    position: absolute;
    top: 0.19rem;
    left: 0.69rem;
    font-weight: 500;
  }
  .ellipse-group {
    position: relative;
    width: 2.19rem;
    height: 2.19rem;
    color: #fff;
  }
  .div2 {
    position: absolute;
    top: 0.19rem;
    left: 0.69rem;
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .div3 {
    position: relative;
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .div4 {
    position: absolute;
    top: 0.19rem;
    left: calc(50% - 11.5px);
    letter-spacing: 0.02em;
    font-weight: 500;
  }
  .straniceselector {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 0.25rem;
    font-size: 1.25rem;
    color: #03a9f4;
    font-family: Poppins;
  }
  .glavnipodframe {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 5.38rem 0rem;
    gap: 6rem;
    z-index: 0;
  }
  .blurbackground {
    flex: 1;
    position: absolute;
    margin: 0 !important;
    top: 0rem;
    left: 0rem;
    background-color: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(10px);
    height: 100%;
    width: 100%;
    z-index: 2002;
  }
 
  .nasiclanovi {
    position: relative;
    background-color: #f8f7f5;
    width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: center;
    gap: 0.63rem;
    text-align: left;
    font-size: 0.88rem;
    color: #000;
    font-family: Inter;
  }

  @media screen and (max-width: 600px) {
    .zahtjevi-root {
    grid-template-columns: auto !important;
  }



    .placeholder-image {
    content: url('/storage/slike/nasiclanovi/placeholderclanovi_mobile.jpg');
  }
    .filteriframeglavni-child {
    height: 24.81rem;
  }
    .filteritraka {
      flex-direction: row;
  
      box-sizing: border-box;
      
    }

    .pretrazivanjepoimenu {
      width: calc(100% - 16%); /* Subtract left and right padding from 100% */
    padding-left: 4%;
    padding-right: 4%;

  
      
      box-sizing: border-box;
    }

    .ponistigumb {
    top: 47%;
    right: 5%;

  }
    .input-wrapper {
padding-left: 24px;
}
  
  }

  @media screen and (max-width: 978px) {
  .filteriframeglavni-child {
    height: 19.81rem;
  }
  .filteriframeglavni {
    height: 26rem;
  }

  .ponistigumb {
    top: 63%;
    right: 7%;

  }
  }


  @media screen and (max-width: 350px) {


  
    .popis-lanova-hzuts-a {
    left: 3.05rem;
  }

    .ponistigumb {
      height: auto;
      flex-direction: row;
      gap: 0.63rem;
      padding-top: 0;
      padding-bottom: 0rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 460px) {
    .plavi-text {
   text-align: center;
}
    .popis-lanova-hzuts-a {
    left: 2.8rem;
  }
    .filteritraka {
   left: 2.8rem;
      
    }
 .prikaz-group {
    position: absolute;
    top: 20.88rem;
    right: 7.75rem;
    border: 1px solid rgba(3, 169, 244, 0.5); 
    box-sizing: border-box;
    width: 5.25rem;
    height: 1.88rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0.44rem 0rem 0.44rem 0.75rem;
    gap: 1.75rem;
  }
    
    .pretrazivanjepoimenu {
      width: 16.35rem;
      padding: 0.63rem 0.5rem 0.63rem 0.81rem;
      left: 2.1rem;
    }
    .filteriframeglavni-child {
    height: 24.81rem;
  }
  .input-wrapper {
    width: calc(100% - 8%); /* Subtract left and right padding from 100% */
    padding-left: 4%;
    padding-right: 4%;

align-items: center;

  height: 2.35rem;
padding-left: 24px;
overflow: visible;
}

.input-wrapper::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */

  color: #999999;
  opacity: 1; 
}

.ponistigumb {
    top: 90%;
    right: 40%;

  }

  }



  @media screen and (max-width: 675px) {




    .filteriframeglavni-child {
    height: 24.81rem;
  }
      .pretrazivanjepoimenu {


      width: calc(100% - 16%); /* Subtract left and right padding from 100% */
    padding-left: 4%;
    padding-right: 4%;
    height: auto;

   
  }
.ponistigumb {
    top: 90%;
    right: 40%;

  }

  }






  
  .detaljnije-informacije {
    position: relative;
    font-weight: 500;
  }
  .closexgumb-icon {
    position: relative;
    width: 32px;
    height: 32px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .framedetalji {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    text-align: center;
    margin-left: 0%
  }
  .imeclana {
    position: relative;
  }
  .statusclanaaktivan {
    position: relative;
    font-size: 20px;
    color: #68c471;
  }
  .frameimeistatus {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 5px;
  }
  .sviframeoviizaduzenje {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    font-size: 32px;
    margin-left: 24%;
    margin-top: 6%;
  }
  .info-icon {
    position: relative;
    width: 40px;
    height: 40px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .osnovne-informacije {
    position: relative;
    font-weight: 600;
  }
  .naslovosnovneinfo {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 116px;
  }
  .grad {
    position: relative;
  }
  .grad-wrapper {
    width: 42px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .zagreb-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    color: #03a9f4;
  }
  .gradframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 181px;
  }
  .podruni-zbor-wrapper {
    width: 110px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .podrucnizborframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 113px;
  }
  .lanski-broj-wrapper {
    width: 93px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .clanskibrojframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 130px;
  }
  .kvadrat {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 5px;
    font-size: 16px;
  }
  .prviframedetalji {
    align-self: stretch;
    border-radius: 10px;
    background-color: #f8f7f5;
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 15px;
    box-sizing: border-box;
    gap: 20px;
  }
  .statusdetalji {
    position: relative;
    font-weight: 600;
  }
  .naslovstatus {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 184px;
  }
  .status-wrapperdetalji {
    width: 49px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .statusframedetalji {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 172px;
  }
  .licenca-wrapper {
    width: 63px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .isia-br-7654-ivsi-wrapper {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    color: #68c471;
  }
  .licenceframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 158px;
  }
  .licenca-vrijedi-do-wrapper {
    width: 137px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .licencavrijediframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 84px;
  }
  .valjanost-licence-wrapper {
    width: 132px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .valjanostlicenceframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 89px;
  }
  .lanska-iskaznica-wrapper {
    width: 139px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .clanskaiskaznicaframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 82px;
  }
  .kvadrat1 {
    align-self: stretch;
    border-radius: 10px 10px 0px 0px;
    background-color: #f8f7f5;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 22px 15px;
    gap: 20px;
  }
  .naslovseminar {
    align-self: stretch;
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: 175px;
  }
  .status-steen-wrapper {
    width: 151px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }
  .seminar-za-potvrivanje-licenc-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    color: #03a9f4;
  }
  .statusstecenframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 70px;
  }
  .datum-seminara-wrapper {
    width: 128px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .datumseminaraframe {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 93px;
  }
  .mjesto-seminara {
    position: relative;
  }
  .mjesto-seminara-wrapper {
    width: 129px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .mjestoseminaraframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 92px;
  }
  .drava-wrapper {
    width: 57px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .drzavaframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 164px;
  }
  .organizator-wrapper {
    width: 94px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .hzuts-i-nik {
    position: relative;
    font-weight: 600;
  }
  .organizatorframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 127px;
  }
  .licencaframe {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 158px;
  }
  .kvadrat2 {
    align-self: stretch;
    border-radius: 0px 0px 10px 10px;
    background-color: #f8f7f5;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 18px 15px;
    gap: 20px;
  }
  .drugiframe {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
  }
  .zaduenja {
    position: relative;
    font-weight: 600;
  }
  .gumbzaduzenja {
    align-self: stretch;
    border-radius: 10px;
    background-color: #03a9f4;
    height: 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
  }
  .framesvekartice {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 30px;
    padding-top: 1.6rem;
  }
  .glavnipodframedetalji {
    align-self: stretch;

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 1px 0px 0px;
  
  }
  .detaljiclanaframeglavni {

    flex: 1;
    min-width: 600px;
    height: 100%; 
    overflow-y: scroll; 

    margin: 0 !important;
    position: fixed; 
    top: 0rem;
    right: 0.06rem;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 1.75rem 1.81rem;
    gap: 1.5rem;
    z-index: 2003;
    font-size: 1.25rem;

   


  }

  @media screen and (max-width: 600px) {

    .detaljiclanaframeglavni {
      min-width: auto; 
    width: 100%;
}

    .imeclana {
      font-size: 30px;
    }

    .frameimeistatus {
      align-items: flex-start;
      justify-content: center;
      padding-top: 20px;
      padding-bottom: 0px;
      box-sizing: border-box;
    }

    .osnovne-informacije {
      font-size: 14px;
    }

    .grad {
      font-size: 14px;
    }

    .status {
      font-size: 14px;
    }

    .mjesto-seminara {
      font-size: 14px;
      text-align: left;
    }

    .hzuts-i-nik {
      font-size: 14px;
      text-align: left;
    }
  }



  @media screen and (max-width: 460px) {

    .container {
    padding-right: 3%; 
  }

      .naslovosnovneinfo {
    gap: 66px;
  }
  .gradframe {
    gap: 121px;
  }

  .podrucnizborframe {
    gap: 93px;
  }
  .clanskibrojframe {
    gap: 70px;
  }


.naslovstatus {
    gap: 104px;
  }

  .statusframedetalji {

    gap: 112px;
  }



  .licenceframe {
    gap: 98px;
  }
  .licencavrijediframe {
    gap: 24px;
  }

  .valjanostlicenceframe {
    gap: 29px;
  }

  .clanskaiskaznicaframe {

    gap: 22px;
  }


 .framesvekartice {

    padding-top: 3.4rem;
  }

.payments-list {
  
    padding-top: 3.4rem;

}


      .sviframeoviizaduzenje {

    margin-left: 30%;
    margin-top: 5%;
  }

    .placeholderzaslike-icon {
        width: 70px; /* Set the desired size */
        height: 70px; /* Set the desired size */
        position: absolute;
        left: 4%;
        margin-top: 6%;
top:6%
    
    }

 
     .statusdetalji {
    font-size: 12px;
  }
 .statusstecenframe {

    gap: 30px;
  }
  .drzavaframe {

    gap: 104px;
  }
  .organizatorframe {
    gap: 67px;
  }
  .licencaframe {
    gap: 98px;
  }
      .datumseminaraframe {
    gap: 33px;
  }
  .mjestoseminaraframe {
    gap: 32px;
  }
    .imeclana {
      font-size: 26px;
    }

    .naslovseminar {
      font-size: 12px;
     gap: 105px;
    }
    
    .frameimeistatus {
      align-items: flex-start;
      justify-content: center;
      padding-top: 20px;
      padding-bottom: 0px;
      box-sizing: border-box;
        font-size: 12px;
    }

    .osnovne-informacije {
      font-size: 12px;
    }

    .grad {
      font-size: 12px;
    }

    .status {
      font-size: 12px;
    }

    .mjesto-seminara {
      font-size: 12px;
      text-align: left;
    }

    .hzuts-i-nik {
      font-size: 12px;
      text-align: left;
    }
  }




.custom-dropdown1 {
  position: relative;
  width: 300px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;
  
}
.custom-dropdown2 {
  position: relative;
  width: 120px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;

}
.custom-dropdown3 {
  position: relative;
  width: 120px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;

}
.custom-dropdown4 {
  position: relative;
  width: 120px; /* Adjust as necessary */
  border: 1px solid rgba(3, 169, 244, 0.5); 
  cursor: pointer;
 
}

.dropdown-label {
  padding: 10px; /* Adjust as necessary */
  background-color: white;
  border: 1px solid rgba(3, 169, 244, 0.5); 
 
}





.dropdown-content {
/* Initially hide the dropdown content */
  position: absolute; /* Position it absolutely within the relative container */
  background-color: #ffffff; /* Set background color */
  min-width: 170px; /* Minimum width of the dropdown content */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Add some shadow for depth */
  z-index: 2010; /* Ensure it's above other content */
  top: 100%;
  border-bottom-left-radius: 5px;  
  border-bottom-right-radius: 5px; 
}
.dropdown-contentAZ {
/* Initially hide the dropdown content */
  position: absolute; /* Position it absolutely within the relative container */
  background-color: #ffffff; /* Set background color */
  min-width: 5.25rem; /* Minimum width of the dropdown content */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); /* Add some shadow for depth */
  z-index: 2010; /* Ensure it's above other content */
  top: 100%;
right: 0%;
border-bottom-left-radius: 5px;  
  border-bottom-right-radius: 5px; 

}



.dropdown-item label {
  padding: 10px;
  cursor: pointer;
  display: flex;
  align-items: center;
  width: 100%;
}

.dropdown-item label:hover {
  background-color: #e6e6e6; /* Slight color change on hover */
}


.dropdown-item {
  padding: 10px;
  border-bottom: 1px solid #f0f0f0;
  display: flex;
  align-items: center;
  z-index: 1000;
}

.dropdown-item:last-child {
  border-bottom: none;
}

.dropdown-item input[type="checkbox"] {
  margin-right: 10px;
}
.dropdown-item:hover {
  background-color:  rgba(3, 169, 244, 1);  /* Color change on hover */
}




.payments-list {

  align-self: stretch;
    display: block;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 30px;
    padding-top: 1.9rem;
    max-height: 100%;
overflow-y: scroll;

}

.payment-separator {
  height: 2px;
  background-color: #03A9F4; /* blue separator line */
  margin-top: 3px; /* space between the info and the line */
}

.payment-title {
  display: block; /* ensures the title is on its own line */
  font-weight: bold;
  font-size: medium;
  margin-top: 8px; /* Space between title and details */
}


.payment-name {
  font-weight: bold;
}

.payment-date {
  font-size: 0.9rem;
  margin-top: auto;
margin-right: auto;
padding-left: 1rem;
}

.payment-status {
  background-color: #67C371; /* green background */
  color: white; /* white text */
  padding: 5px 5px; /* padding inside the status tag */

  font-weight: bold;
  font-size: 0.9rem !important;
}
.payment-info {
  /* styles for the container of status, date, and price */
  display: flex;
  justify-content: space-between; /* adjust as needed */
  align-items: flex-start;
  padding: 8px 0; /* spacing above and below the info line */
}

.payment-price {
  margin-left: 10px; /* Space between the status and the price */
  font-size: 0.9rem;
  margin-top: auto;
}

/* Adjust the background-color and color properties to match your actual 'paidstatus' values */
.payment-status.paid {
  background-color: #67C371; /* Green background for paid status */
}

.payment-status.unpaid {
  background-color: #f44336; /* Red background for unpaid status */
}


.placeholderzaslike-icon {
        width: 100px; /* Set the desired size */
        height: 100px; /* Set the desired size */
        position: absolute;
        left: 4%;
        margin-top: 7%;

        border-radius: 50%; /* Makes it circular */
        border: 2px solid #03A9F4; /* Adds a blue stroke. Change the color as needed */
        object-fit: cover; /* Ensures the image covers the area without distortion */
    }


    .selected-count {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 24px;
  height: 24px;
 /* This will help in case the numbers have two digits or more */
  border-radius: 50%; /* circle */
  background-color: #03a9f4; /* any color you want */
  color: white; /* text color */
  position: absolute;
  top: -10px; /* half of the height to ensure it's centered on the y-axis */
  left: -10px; /* half of the width to ensure it's centered on the x-axis */
  font-size: 0.75rem;
  font-weight: bold;
  z-index: 2;
  border: 2px solid white; /* match the background color of .custom-dropdown */
}

 /* Placeholder container styling */
 .placeholder-container {
    position: relative;
    text-align: center;
    width: 100%; 
    height: auto;
    color: #fff; /* Adjust text color as needed */
  }

  .placeholder-image {
    width: 100%; /* Adjust width as needed */
    height: auto; /* Adjust height as needed */

  }

  .placeholder-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px; /* Adjust font size as needed */
  }
  
  .bell-icon.has-unread path {
  stroke: orange;
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
  stroke: orange;
}













.group-icon1 {
    height: 64px;
    width: 51.2px;
    position: relative;
  }
  .badge-1 {
    overflow: hidden;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0px 6px;
  }
  .amblem {
    text-decoration: none;
    position: relative;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    min-width: 65px;
  }
  .zatrai-zahtjev-za {
    align-self: stretch;
    position: relative;
    font-size: 12px;
    font-weight: 300;
    line-height: 2;
  }
  .zatrai {
    position: relative;
    font-size: 12px;
    font-weight: 500;
    font-family: Inter;
  
    text-align: center;
    display: inline-block;
    min-width: 40px;
  }
  .zatrai-wrapper {
    color: #fff;
    cursor: pointer;
    border: none;
    padding: 7px 49px;
    background-color: #03a9f4;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    border: 1px solid #03a9f4;
  }
  .zatrai-wrapper:hover {
    background-color: #ffffff;
    color: #03a9f4 !important;
    border: 1px solid #03a9f4;
  }
  .badge-1-parent {
    flex: 1;
    border-radius: 15px;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 28px 8px;
    gap: 15px;
    min-width: 149px;
  }
  .vector-icon5 {
    width: 58.7px;
    height: 42.7px;
    position: relative;
  }
  .vector-icon6 {
    width: 91.65%;
    height: 4.64%;
    position: absolute;
    margin: 0 !important;
    top: 41.58%;
    right: 4.17%;
    bottom: 53.79%;
    left: 4.17%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 1;
  }
  .credit-card-1 {
    width: 64.7px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 11px 2px;
    box-sizing: border-box;
    position: relative;
    gap: 10px;
  }
  .iskaznica {
    text-decoration: none;
    position: relative;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    min-width: 73px;
  }
  .zatrai-zahtjev-za1 {
    align-self: stretch;
    position: relative;
    font-size: 12px;
    font-weight: 300;
  }
  .zatrai1 {
    position: relative;
    font-size: 12px;
    font-weight: 500;
    font-family: Inter;

    text-align: center;
    display: inline-block;
    min-width: 40px;
  }
  .zatrai-container {
    color: #fff;
    cursor: pointer;
    border: none;
    padding: 7px 49px;
    background-color: #03a9f4;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    border: 1px solid #03a9f4;
  }
  .zatrai-container:hover {
    background-color: #ffffff;
    color: #03a9f4 !important;
    border: 1px solid #03a9f4;
  }
  .credit-card-1-parent {
    flex: 1;
    border-radius: 15px;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 28px 8px;
    gap: 15px;
    min-width: 149px;
  }
  .vector-icon7 {
    height: 64px;
    width: 64px;
    position: relative;
  }
  .vector-icon8 {
    height: 5.94%;
    width: 18.08%;
    position: absolute;
    margin: 0 !important;
    top: 14.69%;
    right: 40.58%;
    bottom: 79.38%;
    left: 41.35%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 1;
  }
  .vector-icon9 {
    height: 39.69%;
    width: 28.94%;
    position: absolute;
    margin: 0 !important;
    top: 37.66%;
    right: 26.15%;
    bottom: 22.66%;
    left: 44.9%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 1;
  }
  .frame1 {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0px 20px;
    position: relative;
    gap: 10px;
  }
  .potvrda {
    text-decoration: none;
    position: relative;
    font-weight: 600;
    color: inherit;
    display: inline-block;
    min-width: 61px;
  }
  .zatrai-zahtjev-za2 {
    align-self: stretch;
    position: relative;
    font-size: 12px;
    font-weight: 300;
  }
  .zatrai2 {
    position: relative;
    font-size: 12px;
    font-weight: 500;
    font-family: Inter;

    text-align: center;
    display: inline-block;
    min-width: 40px;
  }
  .zatrai-frame {
    color: #fff;
    cursor: pointer;
    border: none;
    padding: 7px 49px;
    background-color: #03a9f4;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    border: 1px solid #03a9f4;
  }
  .zatrai-frame:hover {
    background-color: #ffffff;
    color: #03a9f4 !important;
    border: 1px solid #03a9f4;
  }
  .frame-parent46 {
    flex: 1;
    border-radius: 15px;
    border: 1px solid #03a9f4;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 28px 8px;
    gap: 15px;
    min-width: 149px;
  }
  .zahtjevi-root {
    display: grid;
    grid-template-columns: repeat(3, 1fr);


  width: 100%;
  max-width: 1000px; /* Adjust this value as needed */
  margin: 0 auto;
  display: grid;
  gap: 20px;
  padding: 20px;
  line-height: normal;
  letter-spacing: normal;
  font-size: 16px;
  color: #000;
  font-family: Inter;
}

  @media screen and (max-width: 450px) {
    .zatrai-wrapper {
      width: calc(100% - 40px);
    }

    /* .badge-1-parent {
      width: calc(100% - 40px);
    } */

    .zatrai-container {
      width: calc(100% - 40px);
    }

    /* .credit-card-1-parent {
      width: calc(100% - 40px);
    } */

    .zatrai-frame {
      width: calc(100% - 40px);
    }

    /* .frame-parent46 {
      width: calc(100% - 40px);
    } */

    .zahtjevi-root {
      gap: 30px;
    }
  }


  


</style>