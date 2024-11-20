<template>
  <div>
    <Head :title="$page.props.name" />

      <!-- Floating Action Button -->
      <div v-if="!isSidebarExpanded" class="fab" :class="{ open: isGridVisible }" 
     @touchend="toggleGridVisibility" @click="toggleGridVisibility">
         <span class="fab-icon" :class="{ 'icon-active': isGridVisible }">
      <svg width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="20" y="30" width="60" height="8" fill="black"/>
        <rect x="20" y="46" width="60" height="8" fill="black"/>
        <rect x="20" y="62" width="60" height="8" fill="black"/>
      </svg>
    </span>
  </div>
  <!-- Floating Action Button -->

    <div class="navbar ">
      
    


      <div class="pt-5  container grid mojgrid-cols-profile md:grid-cols-profile" @wheel="handleScrollAttempt">  
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
  <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">{{ $t('moj-profil-0') }}</span>
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
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"   :class="{ 'has-unread': hasUnreadMessages }"
    class="bell-icon">
  <path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
              <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text"   :class="{ 'text-yellow-500': hasUnreadMessages, 'text-gray-700': !hasUnreadMessages }">{{ $t('obavijesti-0') }}</span>
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
<!--1-->

        <div class="bg-white shadow-sm px-6 rounded-xl ml-16">
          <!--2-->
          <div class="h-22 flex flex-col py-4 justify-center border-plava-200 border-b">
            <span class="text-lg font-medium plavi-text">{{ $t('moj-profil-0') }}</span>
           

          </div>
          <div class="grid grid-cols-3 p-6 mb-4 items-start">
            
            <div class="col-span-2 grid md:grid-cols-3 lg:grid-cols-profile-content gap-x-6 pr-4 content-center items-center profile-info">
              <div class="text-sm text-right text-black inter mb-4">{{ $t('ime-0') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="name" disabled type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>

              <div class="text-sm text-right text-black inter mb-4">{{ $t('prezime') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="username" disabled type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="text-sm text-right text-black inter mb-4">{{ $t('datum-rodenja') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="datumrodjenja" disabled type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="text-sm text-right text-black inter mb-4">OIB</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="oib" disabled type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="text-sm text-right text-black inter mb-4">{{ $t('spol') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="spol" disabled type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary  disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>

              <div class="text-sm text-right text-black inter mb-4">{{ $t('broj-mobitela') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="brojmobitela" type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>
              <div class="text-sm text-right text-black inter mb-4">{{ $t('drzava') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="drzava" type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>
       
              <div class="text-sm text-right text-black inter mb-4">{{ $t('grad') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="grad" type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>
              <div class="text-sm text-right text-black inter mb-4">{{ $t('adresa') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="adresa" type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary">
              </div>




              <div class="text-sm text-right text-black inter mb-4">{{ $t('email') }}</div>
              <div class="flex-1 mb-4 col-span-1 md:col-span-2 lg:col-span-1">
                <input v-model="email" disabled type="text" class="tekstzainpute w-full border p-2 text-sm focus:outline-none hover:shadow-inner transition-shadow form-input border-plava-200 rounded-md focus:ring-0 focus:border-primary disabled:text-gray-700 disabled:shadow-none disabled:cursor-not-allowed">
              </div>
              <div class="col-start-2 col-end-3 mt-2 items-center justify-center flex text-center">
                <button class="bg-primary1  font-medium px-9 py-2 rounded-md text-white text-sm filter hover:brightness-110" @click="save">{{ $t('spremi') }}</button>
              </div>
            </div>
      <!--2-->

            <!--3-->
            <div class="profile-content flex flex-col justify-start col-span-1 p-8 items-center border-l border-plava-200 ml-4">
              <div class="border-plava-200 border-2 rounded-full"> <!-- New container with border -->

                <div class="avatardesni bg-gray-100 flex rounded-full items-center justify-center clip-circle relative "> 
                <template v-if="user.avatar">
              
      <!-- Check if avatar is approved -->
      <img
        v-if="avatar_approved"
        :src="avatar ? avatar : user.new_avatar"
        alt=""
        class="object-cover avatardesni"
      />
      <img
        v-else
        :src="avatar ? avatar : user.avatar"
        alt=""
        class="object-cover avatardesni"
      />
      <!-- Conditional overlay based on avatar approval status -->
      <div
        v-if="avatar_approved"
        class="absolute bottom-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center"
      >
        <span class="text-white items-center justify-center flex text-center"
          >{{ $t('ceka-se-odobrenje-nove-slike') }}</span
        >
      </div>
    </template>

                <template v-else>
                  <img
              class="object-contain avatardesni"
              loading="lazy"
              alt=""
              src="/storage/slike/nemaslike.svg"
            />
                 



                </template>
              </div>   </div>


        
      
              <template>

    <input
      type="file"
      @change="filesChange"
      accept="image/png, image/jpeg"
      ref="file"
      class="hidden"
    />

    <button
      @click="$refs.file.click()"
      class="px-6 py-2 text-sm bg-white border border-plava-200 mt-4 mb-2 rounded-md hover:bg-gray-50"
    >
      {{ $t('odaberite-sliku') }}
    </button>

    <span class="text-sm text-gray-400">{{ $t('velicina-slike-maks-4-mb') }}</span>
    <span class="text-sm text-gray-400">{{ $t('format-slike-jpeg-png') }}</span>

    <div v-if="showCropperModal" class="cropper-modal">
  <Cropper
    ref="cropper"
    :src="imageSrc"
    :aspectRatio="2/3"
    :guides="true"
    :viewMode="2"
    :autoCropArea="0.97"
    :dragMode="'move'"
    :movable="true"
    :zoomable="true"
    :rotatable="true"
    :scalable="true"
    :cropBoxMovable="true"
    :cropBoxResizable="true"
    :showClose="false"
    :showResetCrop="false"
    :showConfirmCrop="false"
    @cropped="cropImage"
  />

  <div class="button-group">
    <button @click="cancelCrop" class="cancel-button">{{ $t('odustani') }}</button>
    <button @click="confirmCrop" class="confirm-button">{{ $t('potvrdi-0') }}</button>
  </div>
</div>

</template>





            </div>
       <!--3-->
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
    <template v-if="user.avatar">
        <img :src="avatar ? avatar : user.avatar" alt="" class="object-cover h-14 w-14">

      </template>
      <template v-else>
        <img
              class="object-contain avatardesni"
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
    <img   :src="userAvatar ? userAvatar : '/storage/slike/nemaslike.svg'" alt="User's avatar" class="object-cover h-10 w-10">
  </div> 

  <Link :href="route('skijasi.commerce-theme.profile')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="#03A9F4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
<span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">{{ $t('moj-profil-0') }}</span>
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
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text"   :class="{ 'text-yellow-500 ': hasUnreadMessages, 'text-gray-700': !hasUnreadMessages }">{{ $t('obavijesti-0') }}</span>
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
</div>  </div> </transition>
<!--1-->


 
    </div>
  
</template>

<script>
import appLayout from '../../layouts/app.vue'
import profileLayout from '../../layouts/profile.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'

import Cropper from 'vue-cropperjs';
import 'cropperjs/dist/cropper.css';

import poruke from  '../../../../../../core/src/resources/js/api/modules/skijasi-poruke.js';


export default {
  layout: [appLayout, profileLayout],
  components: {
    Link,
    Head,
    Cropper
  },
  data() {
    return {
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

      new_avatar: null,
 
     // urlfacebook: null,
     // urltwitter: null,
     // urlinstagram: null,
     // urllinkedin: null,

     isSidebarExpanded: window.innerWidth > 768, // Initialize based on screen width
     isSidebarOpen: false,
     isGridVisible: true, 

     initialState: {},

     imageSrc: null,
      showCropperModal: false,
      croppedImage: null,
      avatar: null,
      avatarReadyToUpload: false,
      file: null,

      adminMessages: [],
      currentUser: null,
      users: [], 
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
  
},
created() {
    this.fetchAdminMessages();
  },


  mounted() {
    if (!this.isAuthenticated) {
      this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
    }

    window.addEventListener('scroll', this.handleScrollAttempt);
    
  },

  beforeDestroy() {
    // Remove event listener when component is destroyed
    window.removeEventListener('scroll', this.handleScrollAttempt);

  },
  methods: {

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
    },


    toggleSidebarExpansion() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },

    getChangedData() {
  const changedData = {};
  for (const key in this.initialState) {
    if (this[key] !== this.initialState[key]) {
      changedData[key] = this[key];
    }
  }
  console.log("TEST changed data:", changedData);

  return changedData;
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



     this.initialState = {
  
      name: this.name,
      username: this.username,
      datumrodjenja: this.datumrodjenja,
      brojmobitela: this.brojmobitela,
      drzava: this.drzava,
      grad: this.grad,
      postanskibroj: this.postanskibroj,
      adresa: this.adresa,
      oib: this.oib,
      spol: this.spol,
      avatar: this.avatar,
      avatar_approved: this.avatar_approved,
    };

      }
    },

    filesChange(event) {
      this.file = event.target.files[0];
      if (this.file) {
        this.imageSrc = URL.createObjectURL(this.file);
        this.showCropperModal = true;
      }
    },


 





    cropImage(data) {
      this.croppedImage = data;
      this.showCropperModal = false;

      const croppedImageBlob = this.dataURItoBlob(this.croppedImage);
      const croppedImageFile = new File([croppedImageBlob], 'cropped_image.jpg', { type: 'image/jpeg' });
      this.uploadCroppedImage(croppedImageFile);
    },
 
    dataURItoBlob(dataURI) {
  if (!dataURI || dataURI === '') {
    return null; // Return null if dataURI is null or an empty string
  }

  const byteString = atob(dataURI.split(',')[1]);
  const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
  const ab = new ArrayBuffer(byteString.length);
  const ia = new Uint8Array(ab);
  for (let i = 0; i < byteString.length; i++) {
    ia[i] = byteString.charCodeAt(i);
  }
  return new Blob([ab], { type: mimeString });
},

confirmCrop() {
  if (!this.file) {
    return; // No file selected
  }

  // Get the cropped canvas from the cropper component
  const croppedCanvas = this.$refs.cropper.getCroppedCanvas();

  // Convert the cropped canvas to a blob
  croppedCanvas.toBlob((blob) => {
    const croppedImageFile = new File([blob], 'cropped_image.jpg', { type: 'image/jpeg' });

    // Upload the cropped image or perform any other necessary action
    this.uploadCroppedImage(croppedImageFile);

    // Hide the cropper modal
    this.showCropperModal = false;
  }, 'image/jpeg');
},



  cancelCrop() {
    this.showCropperModal = false;
    this.croppedImage = null;
    this.avatar = null;
    this.avatarReadyToUpload = false;
  },


  uploadAvatar(croppedImageBlob) {
  const reader = new FileReader();
  reader.onloadend = () => {
    const base64String = reader.result;
    this.avatar = { avatar: base64String };
    // You can also set a flag that indicates the avatar is ready to be uploaded
    this.avatarReadyToUpload = true;
  };
  reader.readAsDataURL(croppedImageBlob);
},

uploadCroppedImage(croppedImageFile) {
  // Create a new FileReader instance to read the cropped image file
  const reader = new FileReader();
  
  // Set up the onload event handler to handle when the FileReader has finished loading the file
  reader.onload = () => {
    // Retrieve the Base64 encoded data URI of the cropped image
    const base64String = reader.result;

    // Now you can add this string to your form data, which you will send to the server
    // Assuming you have a form object in your data, you can set the avatar property with the base64String
    this.avatar = base64String;

    // Set a flag to indicate that the avatar is ready to be uploaded
    this.avatarReadyToUpload = true;

    // Alternatively, you can directly initiate the upload process here
    // Example: this.$api.uploadAvatar(base64String);
  };

  // Read the cropped image file as a data URL
  reader.readAsDataURL(croppedImageFile);
},







save() {
      const changedData = this.getChangedData();

// Check if there are changes
    if (Object.keys(changedData).length === 0) {
  this.$alert(this.$t('nema-promjena'));
  return;
    }
  this.$api.skijasiUser.edit(changedData)
        .then(res => {
          console.log("API response:", res.data);
          this.$store.dispatch('SET_USER', res.data.user)
          this.$alert(this.$t('uspjesno-spremljeno'))
        })
        .catch(err => {
          this.$alert(this.$t('neuspjesno-provjerite-da-li-ste-unijeli-sve-dobro-0'))
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
  .px-6 {
    /*  display: none; This will hide the element on small screens */
padding-left: 1.5rem !important;
padding-right: 1rem !important;
  }
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

  .container {
    padding-right: 4%; /* Adjust as needed */
  }
}
  @media (max-width: 400px) {
    .plavi-text {
   text-align: center;
}
  .sakrij {
    /*  display: none; This will hide the element on small screens */
width: 66px;
  }

  .p-6 {
    /*  display: none; This will hide the element on small screens */
padding: 0.5rem !important;
  }
  .profile-content, .profile-info {
    width: 95%;
    max-width: none;
    padding: 0.6rem;
  }
  .pt-5
  {
    /*  display: none; This will hide the element on small screens */
padding-top: 0rem !important;
  }
}



/* In your component's <style> section or in a separate CSS file */
.cropper-modal {
  position: relative;


  z-index: 9999;
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  opacity: 1;


}

.button-group {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}


.confirm-button,
.cancel-button {
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
}

.confirm-button {
  background-color: #03A9F4;
  color: white;
  
}

.cancel-button {
  background-color: #676767;
  color: white;
  margin-right: 6px;
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

  </style>