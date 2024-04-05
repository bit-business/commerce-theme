<template>
  <div class="dokumenti-rectangle-parent78" @click="openPdf">
    <div class="dokumenti-frame-child105" />
    <div class="vrstva-x0020-1-15-wrapper">
      <img
        class="vrstva-x0020-1-15-icon3"
        loading="lazy"
        alt=""
        src="/storage/slike/dokumenti/dokumentipdfikona.svg"
      />
    </div>
    <div class="glasanje-vijea-o-predsjedniku-parent">
      <div class="pdfname">{{ pdfName }}</div>
      <div class="dokumenti-wrapper1">
        <div class="pdfdate">{{ formattedDate }}</div>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "PdfKartica",
  props: {
    pdfName: {
      type: String,
      required: true
    },
    pdfDate: {
      type: String,
      required: true
    },
    pdfUrl: {
      type: String,
      required: true
    }
  },
  computed: {
    formattedDate() {
      // Parse pdfDate string into a Date object
      const date = new Date(this.pdfDate);
      // Format date to European date format (dd.mm.yyyy)
      return date.toLocaleDateString("hr");
    }
  },
  methods: {
    openPdf() {
      // Open the PDF file in a new tab or window
      window.open(this.pdfUrl, '_blank')
    }
  }
});
</script>

<style scoped>
  .dokumenti-frame-child105 {
    height: 120px;
    width: 400px;
    position: relative;
    border-radius: 20px;
    background-color: #fff;
    display: none;
    max-width: 100%;
  }
  .vrstva-x0020-1-15-icon3 {
    align-self: stretch;
    flex: 1;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    z-index: 1;
  }
  .vrstva-x0020-1-15-wrapper {
    height: 90px;
    width: 64px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 0px 10px;
    box-sizing: border-box;
  }
  .pdfname {
    align-self: stretch;
    position: relative;
    font-weight: 500;
    z-index: 1;
  }
  .pdfdate {
    width: 90px;
    position: relative;
    display: inline-block;
    min-width: 75px;
    z-index: 1;
  }
  .dokumenti-wrapper1 {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-end;
    padding: 0px 2px;
    color: #73d2f6;
  }
  .glasanje-vijea-o-predsjedniku-parent {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
    gap: 25px;
    min-width: 175px;
  }
  .dokumenti-rectangle-parent78 {
  width: 400px;
  border-radius: 20px;
  background-color: #fff;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  padding: 20px 19px 10px 30px;
  box-sizing: border-box;
  gap: 18px;
  max-width: 100%;
  text-align: center;
  font-size: 14px;
  color: #000;
  font-family: Inter;
  transition: all 0.3s ease; /* Add transition for smooth animation */

}

.dokumenti-rectangle-parent78:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4); 
  cursor: pointer;
}

@media screen and (max-width: 450px) {
  .dokumenti-rectangle-parent78 {
    flex-wrap: wrap;
  }
}

  @media screen and (max-width: 450px) {
    .dokumenti-rectangle-parent78 {
      flex-wrap: wrap;
    }
  }
</style>
