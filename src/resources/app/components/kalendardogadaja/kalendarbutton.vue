<template>
  <section class="button9">
    <img class="crta1-icon" loading="eager" alt="" src="/storage/slike/kalendardogadaja/crta1.svg" />
    <div class="prvisaliste cursor-pointer">
      <template v-for="(product, index) in products">
        <Link 
          v-if="isFutureDate(product.datumPocetka)" 
          :key="'link-' + product.id" 
          class="product-item" 
          :href="route('skijasi.commerce-theme.detalji', product.slug)"
        >
        <div class="text">
          <div class="rednibroj">{{ index + 1 }}</div>
        </div>
        <div class="text1">
          <div class="frame-with-children">
            <div class="text2">{{ formatDateRange(product.datumPocetka, product.datumKraja) }}</div>
            <div class="seminar-hzuts-a-">{{ product.name }} - {{ product.mjesto }}</div>
          </div>
        </div>
        <img class="g14-icon6" loading="eager" alt="" src="/storage/slike/kalendardogadaja/g14.svg" />
      </Link>
      <div 
          v-else 
          :key="'div-' + product.id" 
          class="product-item"
        >  <div class="text">
          <div class="rednibroj">{{ index + 1 }}</div>
        </div>
        <div class="text1">
          <div class="frame-with-children">
            <div class="text2">{{ formatDateRange(product.datumPocetka, product.datumKraja) }}</div>
            <div class="seminar-hzuts-a-">{{ product.name }} - {{ product.mjesto }}</div>
          </div>
        </div>
        <img class="g14-icon6" loading="eager" alt="" src="/storage/slike/kalendardogadaja/g14.svg" />
      </div>
      </template>
    </div>
  </section>
</template>
<script>
  import { defineComponent } from "vue";
  import { Link, Head } from '@inertiajs/inertia-vue'

  export default defineComponent({
    name: "Kalendarbutton",
    components: {
    Link,
    Head
  },
  props: {
    products: {
      type: Array,
      default: () => []
    },
    formatDateRange: Function
  },
  methods: {
    isFutureDate(date) {
      const today = new Date();
      today.setHours(0, 0, 0, 0);
      const startDate = new Date(date);
      return startDate >= today;
    }
  },

});

</script>
<style scoped>
  .crta1-icon {
    align-self: stretch;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    flex-shrink: 0;
    z-index: 1;
  }
  .rednibroj {
    height: 100%;
    position: relative;
    letter-spacing: 20px;
    background: linear-gradient(180deg, #1c63b7, #03a9f4);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    display: flex;
    align-items: center;
    justify-content: center;

    z-index: 1;

    overflow: visible;
  line-height: 1.2; 
  font-size: 6.2rem;
  padding-top: 18px;
  padding-right: 10px;

  }
  .text {
  display: flex;
  flex-direction: column;
  align-items: center; /* Center children horizontally */
  justify-content: center; /* Center children vertically */
  line-height: 1.2;
  height: 100%; 
}

  .text2 {
    height: 36px;
    position: relative;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    -webkit-text-stroke: 1px #03a9f4;
    z-index: 1;

  }
  .seminar-hzuts-a- {
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #03a9f4;
    z-index: 1;
    text-align: left;
  }
  .frame-with-children {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 4px;
  }
  .text1 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 16px 0px 0px;
    box-sizing: border-box;
    min-width: 117px;
    max-width: 100%;
    font-size: 28px;
    font-family: Inter;
  }
  .g14-icon6 {
    height: 30px;
    width: 30px;
    z-index: 1;

    position: absolute;
  top: 12%;
  right: 4%;

  }
  .prvisaliste {
    margin: 0;
    align-self: stretch;
    border-radius: 10px;
 
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 25px;
    flex-shrink: 0;
    max-width: 100%;
    z-index: 1;
  }
  .button9 {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;

    box-sizing: border-box;
    gap: 27px;
    max-width: 100%;
    text-align: center;
    font-size: 100px;
    color: transparent;
    font-family: "Luckiest Guy";
  }

  .product-item {
  display: flex;
  flex-direction: row;
  position: relative;

  align-items: center;
  justify-content: space-between;
  width: 100%;

  border-radius: 10px;
    background-color: #f8f7f5;
    padding: 0px 15px 0px 22px;
    transition: color 0.3s ease, transform 0.3s ease; /* Smooth transition for hover effect */
}

.product-item:hover {
  transform: scale(1.02); /* Slightly larger on hover */
}



  @media screen and (max-width: 675px) {
    .prvisaliste {
      gap: 17px;
    }
  }
  @media screen and (max-width: 450px) {
    .text2 {
      font-size: 16px;
    }

    .seminar-hzuts-a- {
      font-size: 16px;
    }

    .rednibroj {
      font-size: 4rem;
    }

  }
</style>
