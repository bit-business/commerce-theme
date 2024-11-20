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

    <div class="pt-5 container container2 grid grid-cols-1 md:grid-cols-profile" @wheel="handleScrollAttempt">  
     <!--1-->
     <div v-if="isSidebarExpanded" class="Moj-pr-8">

<div :class="{'h-22 flex items-center': true, 'border-b': isSidebarExpanded, 'border-plava-200': !isSidebarExpanded, 'sakrij': true}">




  <div v-if="isSidebarExpanded" class="border-plava-200 border-2 rounded-full"> <!-- New container with border -->
  <div class="h-14 w-14 items-center justify-center clip-circle sidebar-item sidebar-icon">
    <template v-if="user.avatar">
                  <img :src="avatar ? avatar : user.avatar" alt="" class="object-cover h-14 w-14">
 
                </template>
                <template v-else>
                  <img
              class="object-contain"
              loading="lazy"
              alt=""
              src="/storage/slike/nemaslike.svg"
            />

                </template>
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
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('moj-profil-0') }}</span>
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
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('promjena-lozinke-0') }}</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.notification')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">{{ $t('obavijesti-0') }}</span>
  </Link>


  <Link v-if="user.userType !== 'Običan Korisnik'" :href="route('skijasi.commerce-theme.zahtjevi')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1341_5428)">
<path d="M17.4349 10.3894V5.84746C17.4349 5.71746 17.3749 5.59734 17.2899 5.50231L12.1977 0.15509C12.1027 0.0551147 11.9676 0 11.8326 0H3.75915C2.26868 0 1.07812 1.21545 1.07812 2.70611V17.9725C1.07812 19.4632 2.26868 20.6587 3.75915 20.6587H10.1319C11.3373 22.6595 13.5284 24 16.0243 24C19.8158 24 22.9121 20.9187 22.9121 17.1222C22.9173 13.8058 20.5362 11.0347 17.4349 10.3894ZM12.3329 1.7558L15.7492 5.35217H13.5333C12.873 5.35217 12.3329 4.80706 12.3329 4.14678V1.7558ZM3.75915 19.6582C2.82385 19.6582 2.07861 18.9078 2.07861 17.9725V2.70611C2.07861 1.76568 2.82385 1.00049 3.75915 1.00049H11.3324V4.14678C11.3324 5.36224 12.3179 6.35265 13.5333 6.35265H16.4344V10.2592C16.2845 10.2543 16.1643 10.2392 16.0343 10.2392C14.2886 10.2392 12.683 10.9096 11.4725 11.9601H5.11981C4.8446 11.9601 4.61956 12.1851 4.61956 12.4601C4.61956 12.7353 4.8446 12.9604 5.11981 12.9604H10.5421C10.1869 13.4606 9.89171 13.9609 9.66173 14.5111H5.11981C4.8446 14.5111 4.61956 14.7361 4.61956 15.0113C4.61956 15.2864 4.8446 15.5116 5.11981 15.5116H9.33654C9.21148 16.0118 9.14647 16.567 9.14647 17.1222C9.14647 18.0225 9.32152 18.9129 9.63665 19.6633H3.75915V19.6582ZM16.0294 23.0046C12.7881 23.0046 10.1519 20.3684 10.1519 17.1271C10.1519 13.8858 12.7829 11.2496 16.0294 11.2496C19.2757 11.2496 21.9067 13.8858 21.9067 17.1271C21.9067 20.3684 19.2707 23.0046 16.0294 23.0046Z" fill="black"/>
<path d="M5.11938 10.4536H10.1865C10.4617 10.4536 10.6867 10.2284 10.6867 9.95337C10.6867 9.67816 10.4617 9.45312 10.1865 9.45312H5.11938C4.84418 9.45312 4.61914 9.67816 4.61914 9.95337C4.61914 10.2284 4.84418 10.4536 5.11938 10.4536Z" fill="black"/>
<path d="M16.3846 13.4354C16.2896 13.3354 16.1596 13.2754 16.0195 13.2754C15.8794 13.2754 15.7494 13.3354 15.6544 13.4354L12.723 16.5817C12.533 16.7819 12.548 17.1019 12.7481 17.287C12.9483 17.4771 13.2733 17.4621 13.4633 17.2621L15.5342 15.0462V20.5084C15.5342 20.7836 15.7593 21.0087 16.0345 21.0087C16.3095 21.0087 16.5347 20.7836 16.5347 20.5084V15.0462L18.5905 17.2621C18.6906 17.3671 18.8206 17.4222 18.9558 17.4222C19.0757 17.4222 19.1958 17.3771 19.2958 17.287C19.4959 17.097 19.5109 16.7819 19.3209 16.5817L16.3846 13.4354Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_1341_5428">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
</div>
  <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('zahtjevi-0') }}</span>
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
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('povijest-placanja-0') }}</span>
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
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('zaduzenja-0') }}</span>
  </Link>
  <Link v-if="user.userType !== 'Običan Korisnik'" :href="route('skijasi.commerce-theme.mojstatus')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 16V12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 8H12.01" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('moj-status-0') }}</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.shop')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</div>
  <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('shop') }}</span>
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
</svg> </div>             <span @click="() => logout()" class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('odjavi-se-0') }}</span>
  </div>
</div>
</div>  </div>



<div class="bg-white shadow-sm px-6 rounded-xl ml-16 pb-8">
          <!--2-->
          <div class="h-22 flex flex-col py-4 justify-center border-plava-200 border-b">
            <span class="text-lg font-medium plavi-text">{{ $t('obavijesti-0') }}</span>
          </div>
        <div class="flex flex-wrap w-full">

          <template v-if="notifications.length > 0">
            <div
  class="w-full flex p-6 space-x-4 items-center rounded-xl obavijesthover cursor-pointer relative fade-out"
  :class="{
    fade: notification.shouldFadeOut,
    'bg-primary bg-opacity-10': notification.isRead === 0,
    'bg-white': notification.isRead !== 0
  }"
 
  v-for="notification, index in notifications"
  :key="index"
  @mouseover="hoveredNotification = notification"
  @mouseleave="hoveredNotification = null"
><!-- obrisao ovo za url prema narudzbi @click="notificationDetail(notification)"-->

  <div class="">
    <div class="h-24 w-24">
      <img :src="notification.slika ? notification.slika : logoTheme" class="w-full h-full object-cover rounded" alt="">
    </div>
  </div>

  <div class="flex flex-col">
    <a v-if="notification.url" :href="notification.url">
      <div class="text-gray-500" style="max-width: 46vw; white-space: pre-line; word-wrap: break-word;">
        {{ notification.message }}
      </div>
      <div class="text-sm text-black text-bold mt-2" style="font-weight: 500;">{{ $t('objavljeno') }} {{ $moment(notification.created_at).format('DD.MM.YYYY') }}</div>
    </a>

    <div v-else class="text-gray-500" style="max-width: 46vw; white-space: pre-line; word-wrap: break-word;">
      {{ notification.message }}
      <div class="text-sm text-black text-bold mt-2" style="font-weight: 500;">{{ $t('objavljeno') }} {{ $moment(notification.created_at).format('DD.MM.YYYY') }}</div>
    </div>
  </div>

  <div class="w-5/12">
    <button
      class="py-2 px-8 float-right bg-white hover:border-primary hover:text-primary text-xs border rounded-md"
      v-if="notification.type === 'orderNotification'">
      {{ $t('prikazi-detalje-placanja') }}
    </button>
  </div>

  <button @click="deleteNotification(notification.id)" 
          class="absolute top-6 right-7 text-gray-400 hover:text-gray-600 delete-button" 
          v-if="hoveredNotification === notification">
    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
      <path d="M6 18L18 6M6 6l12 12"></path>
    </svg>
  </button>
</div>
          </template>
          <template v-else>
            <div class="w-full h-full flex-col flex p-6 items-center justify-center text-gray-500">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
  <path d="M8 7C8.55 7 9 6.55 9 6V5C9 4.45 8.55 4 8 4C7.45 4 7 4.45 7 5V6C7 6.55 7.45 7 8 7Z" fill="black"/>
  <path d="M8 9C7.45 9 7 9.45 7 10V11C7 11.55 7.45 12 8 12C8.55 12 9 11.55 9 11V10C9 9.45 8.55 9 8 9Z" fill="black"/>
  <path d="M11 9C11.55 9 12 8.55 12 8C12 7.45 11.55 7 11 7H10C9.45 7 9 7.45 9 8C9 8.55 9.45 9 10 9H11Z" fill="black"/>
  <path d="M6 7H5C4.45 7 4 7.45 4 8C4 8.55 4.45 9 5 9H6C6.55 9 7 8.55 7 8C7 7.45 6.55 7 6 7Z" fill="black"/>
  <path d="M59 41H58C57.45 41 57 41.45 57 42C57 42.55 57.45 43 58 43H59C59.55 43 60 42.55 60 42C60 41.45 59.55 41 59 41Z" fill="black"/>
  <path d="M54 41H53C52.45 41 52 41.45 52 42C52 42.55 52.45 43 53 43H54C54.55 43 55 42.55 55 42C55 41.45 54.55 41 54 41Z" fill="black"/>
  <path d="M56 43C55.45 43 55 43.45 55 44V45C55 45.55 55.45 46 56 46C56.55 46 57 45.55 57 45V44C57 43.45 56.55 43 56 43Z" fill="black"/>
  <path d="M56 41C56.55 41 57 40.55 57 40V39C57 38.45 56.55 38 56 38C55.45 38 55 38.45 55 39V40C55 40.55 55.45 41 56 41Z" fill="black"/>
  <path d="M49.6099 51.3992C49.5299 51.3392 49.4399 51.2892 49.3499 51.2492C46.5199 49.5792 41.5799 48.1892 35.3299 47.6992V49.3292C35.3299 51.9992 33.1699 54.1592 30.5099 54.1592C29.2099 54.1592 27.9999 53.6592 27.0999 52.7392C26.1999 51.8292 25.6999 50.6192 25.6999 49.3292V47.6992C19.4499 48.1792 14.5099 49.5692 11.6699 51.2392C11.5699 51.2892 11.4699 51.3392 11.3799 51.4092C10.7499 51.7992 10.2299 52.2092 9.84988 52.6192C9.76988 52.6992 9.69988 52.7792 9.62988 52.8592C10.9399 57.3592 20.8699 59.9992 30.4999 59.9992C40.1299 59.9992 50.0199 57.3492 51.3599 52.8592C51.2899 52.7692 51.2199 52.6892 51.1299 52.5992C50.7499 52.1892 50.2399 51.7892 49.6099 51.3992Z" fill="black"/>
  <path d="M27.7002 47.5795V49.3295C27.7002 50.0895 27.9902 50.7995 28.5302 51.3395C29.0502 51.8695 29.7502 52.1595 30.5102 52.1595C32.0702 52.1595 33.3302 50.8895 33.3302 49.3295V47.5795C32.4102 47.5395 31.4702 47.5195 30.5002 47.5195C29.5302 47.5195 28.6102 47.5395 27.7002 47.5795Z" fill="black"/>
  <path d="M40.1598 29.8694C40.1598 29.8694 50.2498 19.8494 51.4098 18.6894C51.1798 18.5094 50.9398 18.3494 50.6998 18.1894C47.5998 16.2794 43.4298 16.7594 40.8498 19.3394C37.9798 22.2094 37.7498 26.7394 40.1598 29.8694Z" fill="black"/>
  <path d="M52.8304 20.0996L52.1704 20.7596C52.1704 20.7596 41.8304 31.0996 41.6104 31.3196C41.6004 31.3296 42.6004 31.9196 42.6704 31.9596C44.8304 33.1496 47.3404 33.2796 49.6104 32.2896C54.2404 30.2696 55.9704 24.1296 52.8304 20.0996Z" fill="black"/>
  <path d="M11.7002 30.88V34.11C11.7002 39.55 11.1502 44.51 9.91016 49.96C10.5902 49.49 11.3702 49.07 12.2402 48.68C15.7302 47.1 20.6102 46.09 25.7002 45.71C28.8902 45.47 32.1402 45.42 35.3302 45.71C40.4302 46.1 45.3102 47.11 48.8002 48.69C49.6602 49.08 50.4402 49.51 51.1102 49.98C49.9102 44.67 49.3502 39.84 49.3302 34.59C49.2302 34.62 49.1302 34.65 49.0302 34.67C46.0802 35.47 42.7902 34.76 40.3902 32.9C35.6302 29.23 35.3202 21.73 39.7202 17.64C39.9602 17.42 41.8402 15.8 42.1302 16.03C39.8002 14.19 37.0902 12.94 34.2002 12.36C35.0202 11.47 35.5102 10.29 35.5102 9C35.5102 6.24 33.2702 4 30.5102 4C27.7502 4 25.5102 6.24 25.5102 9C25.5102 10.29 26.0002 11.47 26.8202 12.36C18.2102 14.09 11.7002 21.74 11.7002 30.88ZM30.5102 6C32.1702 6 33.5102 7.35 33.5102 9C33.5102 10.65 32.1702 12 30.5102 12C28.8502 12 27.5102 10.65 27.5102 9C27.5102 7.35 28.8602 6 30.5102 6Z" fill="black"/>
</svg>
              <span class ="tekstnemaobavijesti">{{ $t('trenutno-nemate-nikakvih-obavijesti-ovdje-cete-primati-obavijesti-o-vaznim-dogadajima-novostima-i-azuriranjima-budite-sigurni-da-cemo-vam-pruziti-sve-najnovije-informacije-kada-se-pojave') }} </span>
            </div>
          </template>
        </div>
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
    <img :src="userAvatar ? userAvatar : '/storage/slike/nemaslike.svg'" alt="User's avatar" class="object-cover h-10 w-10">
  </div> 

  <Link :href="route('skijasi.commerce-theme.profile')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('moj-profil-0') }}</span>
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
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('promjena-lozinke-0') }}</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.notification')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">{{ $t('obavijesti-0') }}</span>
  </Link>

  <Link v-if="user.userType !== 'Običan Korisnik'" :href="route('skijasi.commerce-theme.zahtjevi')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1341_5428)">
<path d="M17.4349 10.3894V5.84746C17.4349 5.71746 17.3749 5.59734 17.2899 5.50231L12.1977 0.15509C12.1027 0.0551147 11.9676 0 11.8326 0H3.75915C2.26868 0 1.07812 1.21545 1.07812 2.70611V17.9725C1.07812 19.4632 2.26868 20.6587 3.75915 20.6587H10.1319C11.3373 22.6595 13.5284 24 16.0243 24C19.8158 24 22.9121 20.9187 22.9121 17.1222C22.9173 13.8058 20.5362 11.0347 17.4349 10.3894ZM12.3329 1.7558L15.7492 5.35217H13.5333C12.873 5.35217 12.3329 4.80706 12.3329 4.14678V1.7558ZM3.75915 19.6582C2.82385 19.6582 2.07861 18.9078 2.07861 17.9725V2.70611C2.07861 1.76568 2.82385 1.00049 3.75915 1.00049H11.3324V4.14678C11.3324 5.36224 12.3179 6.35265 13.5333 6.35265H16.4344V10.2592C16.2845 10.2543 16.1643 10.2392 16.0343 10.2392C14.2886 10.2392 12.683 10.9096 11.4725 11.9601H5.11981C4.8446 11.9601 4.61956 12.1851 4.61956 12.4601C4.61956 12.7353 4.8446 12.9604 5.11981 12.9604H10.5421C10.1869 13.4606 9.89171 13.9609 9.66173 14.5111H5.11981C4.8446 14.5111 4.61956 14.7361 4.61956 15.0113C4.61956 15.2864 4.8446 15.5116 5.11981 15.5116H9.33654C9.21148 16.0118 9.14647 16.567 9.14647 17.1222C9.14647 18.0225 9.32152 18.9129 9.63665 19.6633H3.75915V19.6582ZM16.0294 23.0046C12.7881 23.0046 10.1519 20.3684 10.1519 17.1271C10.1519 13.8858 12.7829 11.2496 16.0294 11.2496C19.2757 11.2496 21.9067 13.8858 21.9067 17.1271C21.9067 20.3684 19.2707 23.0046 16.0294 23.0046Z" fill="black"/>
<path d="M5.11938 10.4536H10.1865C10.4617 10.4536 10.6867 10.2284 10.6867 9.95337C10.6867 9.67816 10.4617 9.45312 10.1865 9.45312H5.11938C4.84418 9.45312 4.61914 9.67816 4.61914 9.95337C4.61914 10.2284 4.84418 10.4536 5.11938 10.4536Z" fill="black"/>
<path d="M16.3846 13.4354C16.2896 13.3354 16.1596 13.2754 16.0195 13.2754C15.8794 13.2754 15.7494 13.3354 15.6544 13.4354L12.723 16.5817C12.533 16.7819 12.548 17.1019 12.7481 17.287C12.9483 17.4771 13.2733 17.4621 13.4633 17.2621L15.5342 15.0462V20.5084C15.5342 20.7836 15.7593 21.0087 16.0345 21.0087C16.3095 21.0087 16.5347 20.7836 16.5347 20.5084V15.0462L18.5905 17.2621C18.6906 17.3671 18.8206 17.4222 18.9558 17.4222C19.0757 17.4222 19.1958 17.3771 19.2958 17.287C19.4959 17.097 19.5109 16.7819 19.3209 16.5817L16.3846 13.4354Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_1341_5428">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
</div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('zahtjevi-0') }}</span>
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
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('povijest-placanja-0') }}</span>
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
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('zaduzenja-0') }}</span>
  </Link>
  <Link v-if="user.userType !== 'Običan Korisnik'" :href="route('skijasi.commerce-theme.mojstatus')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 16V12" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 8H12.01" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('moj-status-0') }}</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.shop')" class="w-full inline-flex items-center group sidebar-item">
              <div class="sidebar-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

</div>
  <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('shop') }}</span>
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
</svg> </div>             <span @click="() => logout()" class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">{{ $t('odjavi-se-0') }}</span>
  </div>
</div>
</div>  </div>
</transition>
<!--1-->


    <!--mobilni dio
    <div class="sm:hidden">
      <div class="flex flex-col w-full divide-y">
        <div class="flex justify-between px-3 py-2 bg-white">
          <span class="text-sm font-medium text-gray-700">Obavijesti</span>
          <div class="text-sm font-medium text-primary" @click="readAll">Pročitaj sve</div>
        </div>
        <div class="w-full flex gap-2 p-3" :class="[notification.isRead == 0 ? 'bg-primary bg-opacity-10' : 'bg-white']" v-for="notification, index in notifications.data" :key="index" @click="notificationDetail(notification)">

          
          <div class="w-1/5">
            
            <img :src="logoTheme" class="w-full h-auto object-contain object-center" alt="">
          </div>
          <div class="w-4/5 gap-2">
            <div class="text-gray-700 mb-1">{{ notification.title }}</div>
            <div class="text-sm text-gray-400">{{ notification.content }}</div>
            <div class="text-xs text-gray-400 mt-1">{{ $moment(notification.createdAt).format('DD-MM-YYYY H:mm:ss') }}</div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
</template>

<script>
import { mapState } from 'vuex'
import appLayout from '../../layouts/app.vue'
import profileLayout from '../../layouts/profile.vue'
import { Link, Head } from '@inertiajs/inertia-vue'

import poruke from  '../../../../../../core/src/resources/js/api/modules/skijasi-poruke.js';


export default {
  layout: [appLayout, profileLayout],
  components: {
    Link,
    Head,
  },
  data() {
    return {
      notifications: {
        data: []
      },

      isSidebarExpanded: window.innerWidth > 768, // Initialize based on screen width
     isSidebarOpen: false,

     isGridVisible: true, 

     hoveredNotification: null,

      subject: "",
      message: "",
      sentAt: null,
      users: [], // Replace with your actual list of users
      messages: [], // Replace with your actual list of messages

      dummymessageid: {
        data: ["0"]
      },


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
      logoTheme(state) {
        return this.$_.find(state.themeConfigurations, { key: "logoTheme" }).value
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

  },
  mounted() {
    if (!this.isAuthenticated) {
      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    }

   // this.fetchNotifications();

    this.fetchUserMessages();

    window.addEventListener('scroll', this.handleScrollAttempt);
    

  },

  created() {
    this.markread(this.dummymessageid);
},

  beforeDestroy() {
    // Remove event listener when component is destroyed
    window.removeEventListener('scroll', this.handleScrollAttempt);

  },
  methods: {

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
    },


    toggleSidebarExpansion() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },

    fetchUserMessages() {
  poruke.getMessages()
    .then((response) => {
      console.log("API Response:", response);
      if (response) {
        console.log("Response Data:", response);
        const userMessages = response.filter(message => {
          if (message.sent_to.includes("svi2") && this.user.userType !== "Hzuts član") {
            return false; // Exclude messages sent to "svi2" if user_type is not "član"
          }
          return message.sent_to.includes(String(this.user.id)) || message.sent_to.includes("svi") || message.sent_to.includes("svi2");
        });
        console.log("TESTTT:",this.user);
        // Filter messages where message.sent_to contains this user.id
        // Filter messages where message.is_hidden array does not contain this user.id
        const filteredMessages = userMessages.filter(message => {
          if (Array.isArray(message.is_hidden)) {
            return !message.is_hidden.includes(String(this.user.id));
          }
          return true; // If is_hidden is null or not an array, include the message
        });
        // Update recipient information for each message
        filteredMessages.forEach((message) => {
          message.shouldFadeOut = false;
          // Check if message.sent_to is not null and is an array
          if (Array.isArray(message.sent_to)) {
            // Convert string IDs to integers for message.sent_to
            const sentToIds = message.sent_to.map(id => parseInt(id));
            message.recipients = sentToIds.map((userId) => {
              const user = this.users.find((user) => user.id === userId);
              return user ? { id: user.id, name: user.name, username: user.username } : null;
            });
          } else {
            // If message.sent_to is null or not an array, set recipients as an empty array
            message.recipients = [];
          }
          // Convert string IDs to integers for message.is_read
          let isReadIds = [];
          if (Array.isArray(message.is_read)) {
            isReadIds = message.is_read.map(id => parseInt(id));
          }
          message.readers = isReadIds.map((userId) => {
            const user = this.users.find((user) => user.id === userId);
            return user ? { id: user.id, name: user.name, username: user.username } : null;
          });
          // Set the hovered property of the message to false
          message.hovered = false;
        });
        this.notifications = filteredMessages; // Assign filteredMessages to this.notifications
        console.log("Messages:", this.messages);
      } else {
        console.error("No data received from API");
      }
    })
    .catch((error) => {
      console.error("Error fetching user messages:", error);
    });
},

deleteNotification(notificationId) {
    const notification = this.notifications.find(notification => notification.id === notificationId);
    if (notification) {
      if (!notification.is_hidden) {
        notification.is_hidden = []; // Initialize is_hidden as an empty array if it's null
      }
      const userIdString = this.user.id.toString(); // Convert user ID to string
      if (!notification.is_hidden.includes(userIdString)) {
        notification.is_hidden.push(userIdString);
        // Make a request to your API to update the is_hidden property
        poruke.hidenotification(notificationId, { userId: userIdString })
          .then(() => {
            // If the request is successful, fetch updated user messages
            notification.shouldFadeOut = true; 
            setTimeout(() => {
              this.fetchUserMessages();
            }, 500); 
       
          })
          .catch(err => {
            // Handle errors
            this.$helper.displayErrors(err);
          });
      }
    }
  },

  markread(notificationId) {
    const userIdString = this.user.id.toString(); // Convert user ID to string


    poruke.markread(notificationId, { userId: userIdString })
        .then(() => {
            // If the request is successful, fetch updated user messages
        })
        .catch(err => {
            // Handle errors
            this.$helper.displayErrors(err);
        });
},




/*
    fetchNotifications() {
      this.$api.skijasiFcm
        .getMessages()
        .then(res => {
          this.notifications = res.data.notifications
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },

    */
    getOrderId(message) {
      if (message.split("#").length < 2) return null
      return message.split("#")[1].split(" ")[0]
    },
    notificationDetail(notification) {
      if (notification.isRead === 0) {
        this.$api.skijasiNotification
          .read({
            id: notification.id
          })
          .then(res => {
            this.$inertia.visit(this.route('skijasi.commerce-theme.order-detail', this.getOrderId(notification.content)))
          })
          .catch(err => {
            this.$helper.displayErrors(err)
          })
      } else {
        this.$inertia.visit(this.route('skijasi.commerce-theme.order-detail', this.getOrderId(notification.content)))
      }
    },
    /*
    readAll() {
      this.$api.skijasiNotification
        .readAll()
        .then(res => {
          this.fetchNotifications()
        })
        .catch(err => {
          this.$helper.displayErrors(err)
        })
    },
*/

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



  .tekstnemaobavijesti{
  color: #000;
  width: 70%;
  padding-top: 2rem;
  padding-left: 2rem;
text-align: center;
font-family: Inter;
font-size: 14px;
font-style: normal;
font-weight: 300;
line-height: normal;
}


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

  
  .user-info {
    display: none;
  }
  



 
}
@media (min-width: 768px) {
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

@media (max-width: 460px) {
  .items-start{
   align-items: center !important;
}
.plavi-text {
   text-align: center;
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

  .tekstnemaobavijesti{
  width: 84%;
  padding-top: 2rem;
  padding-left: 0rem !important;
}
.grid-cols-profile {
    grid-template-columns: 90% auto;
  }


}

.my-button:hover svg path {
    stroke-width: 1.5;
    stroke: rgba(49, 49, 49, 0.576);
  }

  .fade-out {
  opacity: 1;
  transition: opacity 0.5s ease-out;
}

.fade-out.fade {
  opacity: 0;
}

.obavijesthover:hover {
background-color: #d8d8d839;
}

  </style>