<template>
  <div>
    <Head :title="$page.props.name" />

    <div class="navbar hidden sm:block">
      <div class="pt-5  container grid grid-cols-profile">


        <div class="Moj-pr-8">

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
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Obavijesti</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.order')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<g clip-path="url(#clip0_1338_3676)">
<path d="M22.9088 12.1007V8.7275C22.9088 7.5837 22.0216 6.6535 20.9006 6.56329L17.7681 1.09179C17.4778 0.585754 17.009 0.224073 16.4481 0.0738875C15.8899 -0.0752748 15.3061 0.00306481 14.8064 0.293873L4.06783 6.5457H2.1818C0.97853 6.5457 0 7.52418 0 8.7275V21.8182C0 23.0215 0.978478 24 2.1818 24H20.727C21.9302 24 22.9088 23.0215 22.9088 21.8182V18.445C23.5423 18.2191 23.9996 17.6194 23.9996 16.9092V13.6365C23.9996 12.9263 23.5423 12.3266 22.9088 12.1007ZM19.633 6.5457H14.8789L18.4445 4.4698L19.633 6.5457ZM17.9025 3.52313L12.7108 6.5457H10.5573L17.3641 2.5827L17.9025 3.52313ZM15.3556 1.23666C15.6022 1.0923 15.8904 1.05395 16.1658 1.12748C16.4444 1.20204 16.6766 1.38209 16.821 1.63403L16.8221 1.63603L8.38935 6.5457H6.23598L15.3556 1.23666ZM21.8178 21.8182C21.8178 22.4196 21.3283 22.9091 20.727 22.9091H2.1818C1.58045 22.9091 1.09093 22.4196 1.09093 21.8182V8.7275C1.09093 8.12615 1.58045 7.63663 2.1818 7.63663H20.727C21.3283 7.63663 21.8178 8.12615 21.8178 8.7275V12.0002H18.5452C16.7405 12.0002 15.2725 13.4682 15.2725 15.2728C15.2725 17.0775 16.7405 18.5455 18.5452 18.5455H21.8178V21.8182ZM22.9088 16.9092C22.9088 17.2101 22.6643 17.4546 22.3633 17.4546H18.5452C17.3419 17.4546 16.3634 16.4762 16.3634 15.2728C16.3634 14.0696 17.3418 13.091 18.5452 13.091H22.3633C22.6642 13.091 22.9088 13.3355 22.9088 13.6365V16.9092Z" fill="#03A9F4"/>
<path d="M18.545 14.1816C17.9436 14.1816 17.4541 14.6712 17.4541 15.2725C17.4541 15.8739 17.9436 16.3634 18.545 16.3634C19.1463 16.3634 19.6358 15.8739 19.6358 15.2725C19.6359 14.6712 19.1464 14.1816 18.545 14.1816Z" fill="#03A9F4"/>
</g>
<defs>
<clipPath id="clip0_1338_3676">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">Povijest plaćanja</span>
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
  <Link :href="route('skijasi.commerce-theme.mojstatus')" class="w-full inline-flex items-center group sidebar-item">
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



        <div class="px-6">
          <div class="grid grid-cols-6 bg-white rounded-xl mb-3">
            <div @click="isActive = index" :class="['py-4 cursor-pointer text-center hover:text-primary transition-colors border-b-2 first:rounded-l-xl last:rounded-r-xl text-sm lg:text-base', isActive === index ? 'border-primary text-primary' : 'border-gray-200 text-gray-700']" v-for="(tab, index) in tabs" :key="index">{{ tab }}</div>
          </div>
          <div class="flex items-center mb-3">
            <div class="relative w-full">
              <input type="text" placeholder="Pretraživanje po nazivu" class="w-full py-2 text-sm focus:outline-none rounded-xl pl-12 bg-gray-200 pr-1">
              <div class="absolute left-3 h-5 w-5 top-1/2 -translate-y-1/2 transform">
                <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
            </div>
          </div>
          <div class="grid gap-y-4">
            <div v-for="order, index in filteredOrders" :key="index">
              <div class="flex flex-wrap bg-white rounded-xl p-4">
                <div class="flex w-full justify-end items-center pb-4">
                  <div class="flex space-x-2 items-center" v-if="['process', 'delivering', 'done'].includes(order.status)">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                    <Link :href="route('skijasi.commerce-theme.order-detail', order.id)" class="text-sm text-gray-500">
                      <template v-if="order.status == 'process'">Procesuira se</template>
                      <template v-if="order.status == 'delivering'">U procesu dostave</template>
                      <template v-if="order.status == 'done'">Završena kupnja</template>
                    </Link>
                  </div>
                  <div class="text-sm text-gray-500 border-r pr-2 cursor-default select-none" v-else-if="order.status == 'cancel' && order.cancelMessage">{{ order.cancelMessage }}</div>
                  <div class="flex ml-3 items-center divide-x">
                    <!-- <tooltip class="pr-2 flex items-center justify-center" placement="right" popoverBaseClass="top-arrow-center top-arrow-center mr-2 arrow-right" trigger="hover">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 tooltip-target text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>

                      <template slot="popover">
                        <p class="tooltip-content">Terakhir Di Update Pada 29-07-2021 17:40</p>
                      </template>
                    </tooltip> -->
                    <!-- <div v-tooltip.bottom="'Terakhir Di Update Pada 29-07-2021 17:40'" class="pr-2"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" v-if="['process', 'delivering', 'done'].includes(order.status)">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <!-- </div> -->
                    <span :class="['process', 'delivering', 'done'].includes(order.status) ? 'pl-2' : ''" class="text-sm text-primary tracking-wide uppercase">{{ formatStatus(order.status, order.expiredAt) }}</span>
                  </div>
                </div>
                <Link :href="route('skijasi.commerce-theme.order-detail', order.id)" class="flex w-full flex-col">
                  <div class="flex space-x-4 w-full py-4 first:border-t border-b last:border-b-0 last:pb-0 items-start" v-for="orderDetail, index in order.orderDetails" :key="index">
                    <img :src="orderDetail.productDetail.productImage" class="border" width="80">
                    <div class="flex flex-col">
                      <div class="text-gray-700 line-clamp-2">{{ orderDetail.productDetail.product.name }}</div>
                      <div class="flex">
                        <div class="px-2 my-2 py-1 text-sm border rounded-md cursor-pointer text-gray-500 border-gray-300">{{ orderDetail.productDetail.name }}</div>
                      </div>
                      <div class="text-sm text-gray-600">x{{ orderDetail.quantity }}</div>
                    </div>
                    <div class="flex-grow" />
                    <div class="self-center text-primary flex items-center">
                      <div class="text-gray-300 mr-2 text-sm line-through" v-if="orderDetail.discounted > 0">{{ $currency(orderDetail.price) }}</div>
                      {{ $currency(parseInt(orderDetail.price - orderDetail.discounted)) }}
                    </div>
                  </div>
                </Link>
              </div>
              <div class="bg-white border-t border-dotted p-6 rounded-xl shadow-sm flex flex-nowrap justify-between">
                <div class="flex self-end">
                  <div class="text-xs text-gray-500">Nema primljenih ocjena</div>
                </div>
                <div class="flex flex-col space-y-4 items-end">
                  <div class="flex space-x-3 items-center">
                    <div class="text-sm">Ukupno za platiti:</div>
                    <div class="text-2xl text-primary">{{ $currency(parseInt(order.payed)) }}</div>
                  </div>
                  <div class="flex items-center space-x-2">
                   <!-- <button @click="review(order.id)" class="text-sm bg-primary text-white py-2 rounded-md w-40 font-medium hover:brightness-90 bg-blend-darken filter" v-if="order.status === 'done' && !isReviewIsNull(order.orderDetails)">Ocjena</button>
                     <button class="text-sm bg-primary bg-opacity-0 hover:bg-opacity-5 text-gray-700 py-2 rounded-md w-40 border">Hubungi Penjual</button> -->
                    <Link class="text-sm block text-center bg-primary bg-opacity-0 hover:bg-opacity-5 text-gray-700 py-2 rounded-md w-40 border" :href="route('skijasi.commerce-theme.detalji', order.orderDetails[0].productDetail.product.slug)">Kupi ponovo</Link>
                    <button class="text-sm bg-primary hover:bg-opacity-90 text-white py-2 rounded-md w-40 border" v-if="order.status === 'waitingBuyerPayment'">
                      <component
                        :is="`${order.orderPayment.paymentType}-pay`"
                        :order="order"
                        @click="pay"
                      >Plati</component>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    



    <div class="block sm:hidden">
      <div class="overflow-x-scroll hide-scrollbar">
        <div class="inline-flex h-10">
          <div @click="isActive = index" :class="['w-32 flex-1 border-b-2 text-sm flex justify-center items-center bg-white', isActive === index ? 'border-primary text-primary' : 'border-transparent text-gray-800']" v-for="(tab, index) in tabs" :key="index">{{ tab }}</div>
        </div>
      </div>

      <div class="Moj-pr-8">

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
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.7295 21C13.5537 21.3031 13.3014 21.5547 12.9978 21.7295C12.6941 21.9044 12.3499 21.9965 11.9995 21.9965C11.6492 21.9965 11.3049 21.9044 11.0013 21.7295C10.6977 21.5547 10.4453 21.3031 10.2695 21" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text">Obavijesti</span>
  </Link>


  <Link :href="route('skijasi.commerce-theme.order')" class="w-full inline-flex items-center group sidebar-item">
    <div class="sidebar-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<g clip-path="url(#clip0_1338_3676)">
<path d="M22.9088 12.1007V8.7275C22.9088 7.5837 22.0216 6.6535 20.9006 6.56329L17.7681 1.09179C17.4778 0.585754 17.009 0.224073 16.4481 0.0738875C15.8899 -0.0752748 15.3061 0.00306481 14.8064 0.293873L4.06783 6.5457H2.1818C0.97853 6.5457 0 7.52418 0 8.7275V21.8182C0 23.0215 0.978478 24 2.1818 24H20.727C21.9302 24 22.9088 23.0215 22.9088 21.8182V18.445C23.5423 18.2191 23.9996 17.6194 23.9996 16.9092V13.6365C23.9996 12.9263 23.5423 12.3266 22.9088 12.1007ZM19.633 6.5457H14.8789L18.4445 4.4698L19.633 6.5457ZM17.9025 3.52313L12.7108 6.5457H10.5573L17.3641 2.5827L17.9025 3.52313ZM15.3556 1.23666C15.6022 1.0923 15.8904 1.05395 16.1658 1.12748C16.4444 1.20204 16.6766 1.38209 16.821 1.63403L16.8221 1.63603L8.38935 6.5457H6.23598L15.3556 1.23666ZM21.8178 21.8182C21.8178 22.4196 21.3283 22.9091 20.727 22.9091H2.1818C1.58045 22.9091 1.09093 22.4196 1.09093 21.8182V8.7275C1.09093 8.12615 1.58045 7.63663 2.1818 7.63663H20.727C21.3283 7.63663 21.8178 8.12615 21.8178 8.7275V12.0002H18.5452C16.7405 12.0002 15.2725 13.4682 15.2725 15.2728C15.2725 17.0775 16.7405 18.5455 18.5452 18.5455H21.8178V21.8182ZM22.9088 16.9092C22.9088 17.2101 22.6643 17.4546 22.3633 17.4546H18.5452C17.3419 17.4546 16.3634 16.4762 16.3634 15.2728C16.3634 14.0696 17.3418 13.091 18.5452 13.091H22.3633C22.6642 13.091 22.9088 13.3355 22.9088 13.6365V16.9092Z" fill="#03A9F4"/>
<path d="M18.545 14.1816C17.9436 14.1816 17.4541 14.6712 17.4541 15.2725C17.4541 15.8739 17.9436 16.3634 18.545 16.3634C19.1463 16.3634 19.6358 15.8739 19.6358 15.2725C19.6359 14.6712 19.1464 14.1816 18.545 14.1816Z" fill="#03A9F4"/>
</g>
<defs>
<clipPath id="clip0_1338_3676">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg></div>
    <span class="text-gray-700 font-semibold cursor-pointer group-hover:text-primary transition-colors text-sm pl-2 sidebar-text plava-boja">Povijest plaćanja</span>
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
  <Link :href="route('skijasi.commerce-theme.mojstatus')" class="w-full inline-flex items-center group sidebar-item">
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


      <div class="w-full">
        <div v-for="order, index in filteredOrders" :key="index" class="mt-4 inline-block">
          <div class="flex flex-wrap bg-white p-2 px-4 w-full">
            <div class="flex w-full justify-end items-center pb-2">
              <div class="flex items-center" v-if="['process', 'delivering', 'done'].includes(order.status)">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
              </div>
              <div class="text-sm text-gray-500 border-r pr-2 cursor-default select-none" v-else-if="order.status == 'cancel' && order.cancelMessage">{{ order.cancelMessage }}</div>
              <div class="flex ml-3 items-center">
                <Link :href="route('skijasi.commerce-theme.order-detail', order.id)" :class="['process', 'delivering', 'done'].includes(order.status) ? 'pl-2' : ''" class="text-xs text-primary tracking-wide uppercase">{{ formatStatus(order.status, order.expiredAt) }}</Link>
              </div>
            </div>

            <Link :href="route('skijasi.commerce-theme.order-detail', order.id)" class="flex w-full flex-col">
              <div class="flex space-x-4 w-full py-4 items-start">
                <img :src="order.orderDetails[0].productDetail.productImage" class="border" width="80">
                <div class="flex flex-col gap-2">
                  <div class="text-gray-700 line-clamp-1 text-sm">{{ order.orderDetails[0].productDetail.product.name }}</div>

                  <div class="flex justify-between text-gray-500">
                    <div class="text-left text-sm">
                      Varijacija: {{ order.orderDetails[0].productDetail.name }}
                    </div>
                    <div class="flex-grow" />
                    <div class="text-right text-sm">
                      x {{ order.orderDetails[0].quantity }}
                    </div>
                  </div>

                  <div class="self-end text-sm text-primary flex items-center">
                    <div class="text-gray-300 mr-2 text-sm line-through" v-if="order.orderDetails[0].discounted > 0">
                      {{ $currency(order.orderDetails[0].price) }}
                    </div>

                    <span class="font-medium">{{ $currency(parseInt(order.orderDetails[0].price - order.orderDetails[0].discounted)) }}</span>
                  </div>
                </div>
              </div>
            </Link>

            <Link :href="route('skijasi.commerce-theme.order-detail', order.id)" class="border-t w-full flex justify-center py-2 text-sm text-gray-500" v-if="order.orderDetails.length > 1">
              Pogledaj {{ order.orderDetails.length - 1 }} Više proizvoda
            </Link>

            <div class="w-full flex flex-row justify-between items-center border-t py-2 text-sm">
              {{ order.orderDetails.length }} items
              <div>
                Ukupno za platiti: <span class="text-primary font-medium">{{ $currency(order.payed) }}</span>
              </div>
            </div>

            <div class="bg-white border-t flex flex-nowrap justify-between w-full pt-2 pb-1">
              <div class="flex self-end">
                <div class="text-xs text-gray-500">Nema primljenih ocjena</div>
              </div>
              <div class="flex flex-col items-end" v-if="['done', 'waitingBuyerPayment'].includes(order.status)">
                <div class="flex items-center space-x-2">
                  <button @click="review(order.id)" class="text-sm bg-white text-primary border border-primary py-2 rounded-md w-40 font-medium hover:brightness-90 bg-blend-darken filter" v-if="order.status === 'done' && !isReviewIsNull(order.orderDetails)">Ocjena</button>
                  <button class="text-sm bg-primary hover:bg-opacity-90 text-white font-medium py-2 rounded-md w-40" v-if="order.status === 'waitingBuyerPayment'">
                    <component
                      :is="`${order.orderPayment.paymentType}-pay`"
                      :order="order"
                      @click="pay"
                    >Plati</component>
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>




  </div>
</template>

<script>
import { mapState } from 'vuex'
import Tooltip from '../../components/tooltip/tooltip.vue'
import Radio from './../../components/form/radio.vue'
import appLayout from '../../layouts/app.vue'
import profileLayout from '../../layouts/profile.vue'
import { Link, Head } from '@inertiajs/inertia-vue'

export default {
  layout: [appLayout, profileLayout],
  components: {
    Radio,
    Tooltip,
    Link,
    Head
  },
  data() {
    return {
      isActive: 0,
      tabs: [
         'Svi',
         'Još nije plaćeno',
         'Obrađeno',
         'Poslano',
         'Gotovo',
         'Otkazano'
      ],
      orders: [],
      search: 'ab',


      isSidebarExpanded: window.innerWidth > 768, // Initialize based on screen width
     isSidebarOpen: false,
    }
  },
  computed: {
    filteredOrders() {
      if (this.isActive === 0) {
        return this.orders
      } else if (this.isActive === 1) {
        return this.$_.filter(this.orders, { status: 'waitingBuyerPayment' })
      } else if (this.isActive === 2) {
        return this.$_.filter(this.orders, function(o) { return o.status === 'waitingSellerConfirmation' || o.status === 'process'; })
      } else if (this.isActive === 3) {
        return this.$_.filter(this.orders, { status: 'delivering' })
      } else if (this.isActive === 4) {
        return this.$_.filter(this.orders, { status: 'done' })
      } else {
        return this.$_.filter(this.orders, { status: 'cancel' })
      }
    },
    ...mapState({
      isAuthenticated(state) {
        return state.isAuthenticated
      },
      user(state) {
        return state.user
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

    this.fetchOrders()
  },
  methods: {
    toggleSidebarExpansion() {
      this.isSidebarExpanded = !this.isSidebarExpanded;
    },




    isReviewIsNull(orderDetails) {
      return this.$_.every(orderDetails, 'review')
    },
    formatStatus(status, expiredAt) {
      switch (status) {
        case 'cancel':
          return 'Odustani'
        case 'waitingBuyerPayment':
          return 'Čeka se Vaša potvrda'
        case 'waitingSellerConfirmation':
          return 'Čeka se potvrda HZUTS-a'
        case 'process':
          return 'U procesu'
        case 'delivering':
          return 'U odobravanju'
        case 'done':
          return 'Gotovo'
        default:
          break;
      }
    },
    fetchOrders() {
      this.$api.skijasiOrder
        .browse()
        .then(res => {
          this.orders = res.data.orders
        })
        .catch(err => {
          localStorage.removeItem('token')
          this.$inertia.visit(this.route('skijasi.commerce-theme.login'))
          this.$helper.displayErrors(err)
        })
    },
    review(id) {
      this.$inertia.visit(this.route('skijasi.commerce-theme.review', id))
    },
    pay() {
      this.$helper.alert('Transakcija se obrađuje, ostanite na ovoj stranici.')
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

  .tekstnemaobavijesti{
  color: #000;
  width: 40%;
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

  </style>