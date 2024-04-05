<template>
  <div class="hzuts-documents-screen-desktop">
    <section class="rectangle-parent54">
      <img class="frame-child80" alt="" src="/storage/slike/dokumenti/dokumentinaslovnaslika.png" />
      <div class="frame-child81" />
      <h1 class="dokumenti-hzuts-a">DOKUMENTI HZUTS-a</h1>
    </section>
    <GlavniGrid :pdfFiles="pdfFiles" />
  </div>
</template>
<script>
  import { defineComponent } from "vue";
  import GlavniGrid from "../components/dokumenti/glavnigrid.vue";

  import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

import podacipdf from '../../../../../core/src/resources/js/api/modules/skijasi-file.js';

  export default defineComponent({
    layout: [appLayout, galerijaLayout],
    name: "Dokumenti",
    components: { GlavniGrid },
     data() {
    return {
      pdfFiles: []
    }
  },
  async mounted() {

    try {
    const response = await podacipdf.getpdfdokumenti(); // Call the correct method name

    // Assuming the API response is an object containing the array of pdfFiles
    this.pdfFiles = response.data; // Update pdfFiles with the fetched data

    console.log("Fetched PDF Files:", this.pdfFiles);
  } catch (error) {
    console.error("Error fetching PDF documents:", error);
  }


   console.log ("TEST12121:",this.pdfFiles);

  },
  
  });
</script>
<style scoped>
  .frame-child80 {
    height: 528px;
    width: 1440px;
    position: relative;
    object-fit: cover;
    display: none;
    max-width: 100%;
    z-index: 0;
  }
  .frame-child81 {
    height: 100%;
    width: 100%;
    position: absolute;
    margin: 0 !important;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1;
  }
  .dokumenti-hzuts-a {
    margin: 0;
    height: 48px;
    width: 485px;
    position: relative;
    font-size: inherit;
    letter-spacing: 3px;
    font-weight: 600;
    font-family: inherit;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
  }
  .rectangle-parent54 {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding: 240px 20px;
    box-sizing: border-box;
    position: relative;
    background-image: url("/storage/slike/dokumenti/dokumentinaslovnaslika.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #fff;
    font-family: Inter;
  }
  .hzuts-documents-screen-desktop {
    width: 100%;
    background-color: #f8f7f5;
    max-width: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 60px 0px 147px;
    box-sizing: border-box;
    gap: 65px;
    letter-spacing: normal;
  }

  @media screen and (max-width: 750px) {
    .dokumenti-hzuts-a {
      font-size: 32px;
    }

    .hzuts-documents-screen-desktop {
      gap: 32px 65px;
    }
  }
  @media screen and (max-width: 675px) {
    .rectangle-parent54 {
      padding-top: 156px;
      padding-bottom: 156px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 450px) {
    .dokumenti-hzuts-a {
      font-size: 24px;
    }

    .hzuts-documents-screen-desktop {
      gap: 16px 65px;
    }
  }
</style>
