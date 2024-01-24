<template>
  <div class="kalendar">
    <main class="kalendardogadanja">
      <div class="pozadina" />
      <header class="vector">
        <h2 class="kalendar-dogaanja">Kalendar događanja</h2>
        <img
          class="gumbxzatvori-icon cursor-pointer"
          loading="eager"
          alt=""
          src="/storage/slike/kalendardogadaja/closexgumb.svg"
          @click="closeKalendarFrame"
        />
      </header>
      <Button :products="products" :formatDateRange="formatDateRange" />
    </main>
  </div>
</template>
<script>
  import { defineComponent } from "vue";
  import Button from "./kalendarbutton.vue";

  export default defineComponent({
    name: "Kalendar",
    components: { Button },
    props: {
  products: Array,
  formatDateRange: Function
},

    methods: {
  closeKalendarFrame() {
    // Emit an event
    this.$emit('close');
  }
}



  });
</script>
<style scoped>
  .pozadina {
    width: 600px;
    height: 1024px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .kalendar-dogaanja {
    margin: 0;
    position: relative;
    font-size: inherit;
    font-weight: 600;
    font-family: inherit;
    white-space: nowrap;
    z-index: 1;
  }
  .gumbxzatvori-icon {
    height: 32px;
    width: 32px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
    transition: color 0.3s ease, transform 0.3s ease; /* Smooth transition for hover effect */
}

.gumbxzatvori-icon:hover {
  transform: scale(1.08); /* Slightly larger on hover */
}

  .vector {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-between;
    padding: 0px 10px;
    gap: 20px;
    position: sticky;
    top: 0;
    z-index: 99;
    text-align: center;
    font-size: 32px;
    color: #000;
    font-family: Inter;
  }
  .kalendardogadanja {
    flex: 1;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 20px 20px 798px;
    box-sizing: border-box;
    gap: 40px;
    max-width: 100%;
    overflow: hidden;

  }
  .kalendar {
    width: 600px;

    flex-direction: row;
    align-items: center;
    justify-content: center;
    letter-spacing: normal;


    z-index: 10000;
    right: 0px;
 

    flex: 1;
min-width: 600px;
height: 100%; 
overflow-y: scroll; 
position: fixed; 
gap: 1.5rem;
top: 0px;

  }



@media screen and (max-width: 600px) {

  .kalendar {
  min-width: auto; 
width: 100%;
}}





  @media screen and (max-width: 825px) {
    .kalendardogadanja {
      padding-top: 20px;
      padding-bottom: 519px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 450px) {
    .kalendardogadanja {
      gap: 20px;
      padding-bottom: 337px;
      box-sizing: border-box;
    }
    .kalendar-dogaanja {
  font-size: 1.3rem;
    }
  }
</style>
