<template>
  <div
    class="predsjednik-likvidator-tomisla"
    :style="predsjednikLikvidatorTomislaStyle"
  >
    <div class="predsjedniklikvidator-dag-mo-container1">
      <span>
        <span>{{ $t('predsjednik-likvidator') }}</span>
        <b class="b30"> </b>
      </span>
      <b class="dag-modri2">
        <span>Dag Modrić</span>
      </b>
    </div>
    <div class="dopredsjednik-ivan-vuini-container1">
      <span>
        <span>
          <span>{{ $t('dopredsjednik') }}</span>
          <b class="b31"> </b>
        </span>
        <b class="ivan-vuini2">
          <span>Ivan Vučinić</span>
        </b>
      </span>
    </div>
    <div class="dopredsjednik-ivan-vuini-container1">
      <span>
        <span>
          <span>{{ $t('dopredsjednik') }}</span>
          <b class="b31"> </b>
        </span>
        <b class="ivan-vuini2">
          <span>Tomislav Jug</span>
        </b>
      </span>
    </div>
    <div class="dopredsjednik-ivan-vuini-container1">
      <span>
        <span>
          <span>{{ $t('glavni-tajnik') }}</span>
          <b class="b31"> </b>
        </span>
        <b class="ivan-vuini2">
          <span>Marina Stančić Batković</span>
        </b>
      </span>
    </div>


  </div>
</template>
<script>
  import { defineComponent } from "vue";

  export default defineComponent({
    name: "PredsjednikLikvidatorTomisla",
    props: {
      nASTAVNAKOMISIJA: { type: String },
      prop: { type: String },
      predsjednikDarioMaravi: { type: String },
      propWidth: { type: [Object, Array, String, Number, Boolean] },
      propGap: { type: String },
    },
    computed: {
      predsjednikLikvidatorTomislaStyle() {
        return {
          width: this.propWidth,
          gap: this.propGap,
        };
      },
    },
  });
</script>
<style scoped>
  .b30 {
    color: #03a9f4;
  }
  .dag-modri2 {
    color: #03a9f4;
  }
  .predsjedniklikvidator-dag-mo-container1 {
    align-self: stretch;
    position: relative;
  }
  .b31 {
    color: #03a9f4;
  }
  .ivan-vuini2 {
    color: #03a9f4;
  }
  .dopredsjednik-ivan-vuini-container1 {
    height: 2.44rem;
    position: relative;
    display: flex;
    align-items: center;
    max-width: 100%;
  }
  .predsjednik-likvidator-tomisla {
    width: 43.38rem !important;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 1.88rem !important;
    max-width: 100%;
    text-align: left;
    font-size: 2rem;
    color: #000;
    font-family: Inter;
  }

  @media screen and (max-width: 1050px) {
    .predsjedniklikvidator-dag-mo-container1 {
      font-size: 1.63rem;
    }

    .dopredsjednik-ivan-vuini-container1 {
      font-size: 1.63rem;
    }
  }
  @media screen and (max-width: 450px) {
    .predsjedniklikvidator-dag-mo-container1 {
      font-size: 1.19rem;
    }

    .dopredsjednik-ivan-vuini-container1 {
      font-size: 1.19rem;
    }
  }


  ul {
  list-style-type: disc; 
}

ol {
  list-style-type: decimal; 
  font-weight: 300;
}

li {
  list-style-position: inside; 
}
</style>
