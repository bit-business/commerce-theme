<template>
 
   
 <div :class="['kartica-clana', { 'hover-effect': user.statusAktivan === 'Aktivan' && user.statusPlacanja === 'Sve plaćeno' }]" @click="user.statusAktivan === 'Aktivan' && user.statusPlacanja === 'Sve plaćeno' ? cardClicked() : null">
  <img class="g14-icon" alt="" src="/storage/slike/nasiclanovi/g14.svg" />

        <!--          <img class="placeholderzaslike-icon" 
         :alt="'slika'" 
         :src="user.avatar || '/storage/slike/nasiclanovi/slikaplaceholder.png'" />
          -->
         
             <img class="placeholderzaslike-icon" :class="{ 'inactive-icon': user.statusPlacanja !== 'Sve plaćeno' || user.statusAktivan !== 'Aktivan' }" :alt="user.name" :src="user.avatar || '/storage/slike/nasiclanovi/slikaplaceholder.png'" />
 
      
             <div class="frame3">
               <b class="franjo-ml-jardas">{{ user.name }} {{ user.username }} </b>
               <b class="demostrator-skijanja">{{ user.statusString }}</b>
                        
               <div class="aktivnaframe">
    <!-- Render this span only if user.statusPlacanja is 'Nije plaćeno' or 'Djelomično plaćeno' -->
    <span v-if="user.statusPlacanja === 'Nije plaćeno' || user.statusPlacanja === 'Djelomično plaćeno'" class="nije-plaena expired-license">NIJE PLAĆENA ČLANARINA</span>
    <span v-else class="nije-plaena" :class="{'expired-license': user.statusAktivan === 'Istekla licenca'}">
      {{ user.statusAktivan }}
    </span>
    <!-- Render this span only if user.statusPlacanja is NOT 'Nije plaćeno' and NOT 'Djelomično plaćeno' and user.statusAktivan is 'Istekla licenca' -->
    <span v-if="user.statusAktivan === 'Istekla licenca'" class="nije-plaena expired-license" style="text-transform: uppercase;">
      LICENCA ISTEKLA
    </span>


  </div>



               <div class="licenca-vrijedi-do-container">
                 <span></span>
                 <span class="span"></span>
                 <button v-if="user.avatar_approved != 1" class="dodatne-animacije-btn">Dodatne informacije</button>
               </div>
             </div>
           </div>
    
 
 </template>
 
 <script>
 export default {
   props: ['user', 'getStatusAktivan'],
   methods: {
     cardClicked() {
   this.$emit('cardClicked', this.user);
     }
   }
 }
 </script>
 <style scoped>

 .expired-license {
  color: #DB1F26; /* Red color for expired license */
}
 
 .placeholderzaslike-icon.inactive-icon {
   opacity: 0.45;
   filter: blur(5px); 

 }

 .placeholderzaslike-icon {
        width: 200px; /* Set the desired size */
        height: 200px; /* Set the desired size */
        margin-top: 10px;
        border-radius: 50%; /* Makes it circular */
        border: 2px solid #03A9F4; /* Adds a blue stroke. Change the color as needed */
        object-fit: cover; /* Ensures the image covers the area without distortion */
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
     padding: 0.63rem 0.63rem;
     box-sizing: border-box;
     gap: 0.88rem;
     position: relative; 
 
     transition: transform 0.3s ease; 
   }
   
 
   .kartica-clana.hover-effect:hover {
   height: 116%; /* Increase height by 8% */
   box-shadow: 0px 6px 8px rgba(3, 169, 244, 0.4); /* Slightly increased shadow */
 }
 
 .kartica-clana .dodatne-animacije-btn {
   display: none; /* Initially hidden */
   position: absolute;
   bottom: 150px; /* Adjust as needed */
   left: 51%;
   top: 150%;
   transform: translateX(-50%);

   /* Additional styling for the button */
 }
 
 .kartica-clana.hover-effect:hover .dodatne-animacije-btn {
   display: block; /* Show on hover */
 }

 .hover-effect:hover {
 /* margin-bottom: 8%;  Increase height */
  box-shadow: 0px 6px 15px rgba(3, 169, 244, 0.2); 
  transform: scale(1.05); 
}

.hover-effect:hover .dodatne-animacije-btn {
  display: block; /* Show the button on hover */
}

.dodatne-animacije-btn {
  display: none; /* Hide the button by default */
  cursor: pointer;
    border: none;

    color: #fff;
    background-color: #03a9f4;
    border-radius: 10px;
    margin-top: 5rem;
    
    width: 17.25rem;
    height: 2.55rem;
    display: flex;

    z-index: 4;

    
    font-size: 1rem;
    font-weight: 500;
     text-align: center;


     bottom: 10px; /* Adjust as needed */
   left: 50%;
   top: 120%;

   transform: translate(-50%, -50%);


}



 
.g14-icon {
    position: absolute;

    top: 2.44%;
    right: 78.13%;
    bottom: 82.93%;
    left: 3.13%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
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
 
   .strelicapremadolje-icon {
     position: absolute;
     top: 0.19rem;
     left: 12.38rem;
     width: 0.75rem;
     height: 1.13rem;
     overflow: hidden;
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
   font-size: 20px;
   text-transform: uppercase;
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
     top: 14.81rem;
     left: 28.88rem;
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
   }
   .pretrazivanjepoimenu {
     border: 2px solid #03a9f4;
     font-weight: 300;
     font-family: Inter;
     font-size: 0.88rem;
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
     padding: 0.63rem 2.5rem 0.63rem 0.81rem;
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
     border: 1px solid #03a9f4;
     box-sizing: border-box;
     width: 6.25rem;
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
   .ponistigumb {
     cursor: pointer;
     border: none;
     padding: 0;
     background-color: transparent;
     position: absolute;
     height: 4.22%;
     top: 50.13%;
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
     height: 23.69rem;
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
   left: 50%; /* Set left to 50% of the parent container */
   transform: translateX(-50%); /* Shift it back to the left by half of its own width */
 }
 
 .demostrator-skijanja {
  position: absolute;
  top: 1.81rem;
  left: 50%; /* Center horizontally */
  transform: translateX(-50%); /* Adjust horizontal centering */
  font-size: 12px;
  font-weight: 700;
  color: #03a9f4;
  text-align: center; /* Center text horizontally */
  white-space: normal; /* Allow text to wrap */
  max-width: 90%; /* Set a max-width to ensure it doesn't overflow the card */
  display: flex; /* Use flexbox */
  flex-direction: column; /* Align children vertically */
  align-items: center; /* Center children horizontally */
  justify-content: center; /* Center children vertically */
}

   .aktivnaframe{
     position: absolute;
     top: 4.6rem;
     left: 49%; /* Set left to 50% of the parent container */
   transform: translateX(-49%); 
     width: fit-content;
     overflow: visible;
     font-size: 20px;

     color: #67C371;

     padding: 4px; /* Adjust padding as needed */
  gap: 4px;

  text-align: center; /* Center text horizontally */
  white-space: normal; /* Allow text to wrap */
  max-width: 99%; /* Set a max-width to ensure it doesn't overflow the card */
  display: flex; /* Use flexbox */
  flex-direction: column; /* Align children vertically */
  align-items: center; /* Center children horizontally */
  justify-content: center; /* Center children vertically */
  font-size: 1rem; 
  white-space: nowrap;

   }
   .span {
     color: #03a9f4;
   }
   .licenca-vrijedi-do-container {
     position: absolute;
     top: 4.96rem;
     left: calc(50% - 0px);
     font-size: 0.75rem;
     font-weight: 600;
   }
   .frame3 {
     position: relative;
     width: 30rem;
     height: 6.75rem;
     overflow: visible;
     flex-shrink: 0;
   }
 
  
   .frame {
     align-self: stretch;
     overflow: hidden;
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: flex-end;
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
     gap: 86rem;
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
     height: 141.88rem;
     z-index: 2001;
   }
   .detaljnije-informacije {
     position: relative;
     font-weight: 500;
     text-align: center;
     z-index: 0;
   }
   .imeclana {
     position: relative;
     font-size: 2rem;
     z-index: 1;
   }
   .statusclanaaktivan {
     position: relative;
     color: #68c471;
     z-index: 2;
   }
   .info-icon {
     position: relative;
     width: 2.5rem;
     height: 2.5rem;
     overflow: hidden;
     flex-shrink: 0;
   }
   .frame6 {
     position: absolute;
     top: 0rem;
     left: 0rem;
     width: 22.19rem;
     height: 2.5rem;
     overflow: hidden;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 7.25rem;
     font-size: 1.25rem;
   }
   .zagreb {
     position: relative;
     font-weight: 600;
     color: #03a9f4;
   }
   .grad-parent {
     width: 21.31rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 15.19rem;
   }
   .podruni-zbor-parent {
     width: 26.94rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 10.94rem;
   }
   .lanski-broj-parent {
     width: 20.5rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 12rem;
   }
   .isia-broj-parent {
     width: 21.75rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 13.56rem;
   }
   .frame-group {
     position: absolute;
     top: 3.75rem;
     left: 0.19rem;
     width: 26.94rem;
     height: 5.69rem;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: flex-start;
     gap: 0.31rem;
   }
   .uitelj-skijanja-licenca-parent {
     position: absolute;
     top: 9.75rem;
     left: 0.19rem;
     width: 25.63rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 6.44rem;
   }
   .frame5 {
     align-self: stretch;
     position: relative;
     height: 10.94rem;
     overflow: hidden;
     flex-shrink: 0;
   }
   .uitelj-snowboarda-licenca-parent {
     align-self: stretch;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 4.13rem;
   }
   .frame-parent {
     align-self: stretch;
     border-radius: 10px;
     background-color: #f8f7f5;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: flex-start;
     padding: 0.94rem;
     gap: 0.31rem;
     font-size: 1rem;
   }
   .frame7 {
     width: 17.94rem;
     height: 2.5rem;
     overflow: hidden;
     flex-shrink: 0;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 11.5rem;
   }
   .aktivan-status-parent {
     width: 20.81rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 6.81rem;
   }
   .vaea {
     position: relative;
     font-weight: 600;
     color: #68c471;
   }
   .lanska-iskaznica-parent {
     width: 17.38rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 5.13rem;
   }
   .licenca-vrijedi-do-parent {
     width: 19.5rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 5.25rem;
   }
   .valjanost-licence-parent {
     width: 18.06rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 5.56rem;
   }
   .frame-parent1 {
     width: 20.81rem;
     height: 5.69rem;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: flex-start;
     gap: 0.31rem;
     font-size: 1rem;
   }
   .frame-container {
     align-self: stretch;
     border-radius: 10px;
     background-color: #f8f7f5;
     height: 13.75rem;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: flex-start;
     padding: 0.94rem;
     box-sizing: border-box;
     gap: 1.25rem;
   }
   .frame8 {
     width: 18.44rem;
     height: 2.5rem;
     overflow: hidden;
     flex-shrink: 0;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 10.94rem;
   }
   .status-steen-parent {
     width: 29.25rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 7rem;
   }
   .datum-seminara-parent {
     width: 19.63rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 5.81rem;
   }
   .mjesto-seminara-parent {
     width: 21.06rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 5.75rem;
   }
   .drava-parent {
     width: 18.19rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 10.25rem;
   }
   .organizator-parent {
     width: 23.38rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 7.94rem;
   }
   .kraj-statusa-parent {
     width: 19.63rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 7.94rem;
   }
   .procedura-statusa-parent {
     width: 19.31rem;
     height: 1.19rem;
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: flex-start;
     gap: 4.88rem;
   }
   .frame-parent3 {
     align-self: stretch;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: flex-start;
     gap: 0.31rem;
     font-size: 1rem;
   }
   .frame-parent2 {
     align-self: stretch;
     border-radius: 10px;
     background-color: #f8f7f5;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: flex-start;
     padding: 0.94rem;
     gap: 1.25rem;
   }
   .framesvekartice {
     align-self: stretch;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
     justify-content: center;
     gap: 1.25rem;
     z-index: 3;
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
 
 
 </style>