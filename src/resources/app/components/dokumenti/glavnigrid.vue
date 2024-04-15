<template>
  <section class="hzuts-documents-screen-desktop-inner">
    <div class="dokumenti-frame-parent22">
      <PdfKartica
        v-for="(pdfFile, index) in pdfFiles"
        :key="index"
        :pdfName="pdfFile.name"
        :pdfDate="pdfFile.date"
        :pdfUrl="'/storage/dokumenti-web-hzuts/' + pdfFile.name + '.pdf'"
      />
    </div>
  </section>
</template>

<script>
import { defineComponent } from "vue";
import PdfKartica from "./pdfkartica.vue";

export default defineComponent({
  name: "GlavniGrid",
  components: { PdfKartica },
  props: {
    pdfFiles: {
      type: Array,
      required: true
    }
  }
});
</script>
<style scoped>
  .dokumenti-frame-parent22 {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 65px 48px;
    min-height: 490px;
    max-width: 100%;
  }
  .hzuts-documents-screen-desktop-inner {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 0px 73px 0px 67px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 14px;
    color: #000;
    font-family: Inter;
  }

  @media screen and (max-width: 750px) {
    .hzuts-documents-screen-desktop-inner {
      padding-left: 33px;
      padding-right: 36px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 675px) {
    .dokumenti-frame-parent22 {
      gap: 65px 24px;
    }
  }
</style>
