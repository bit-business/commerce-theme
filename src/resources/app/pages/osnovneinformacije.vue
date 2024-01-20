<template>
  <div class="osnovn-informacije">
    <section class="naslovni-frame">
      <div class="osnovne-informacije">OSNOVNE INFORMACIJE</div>
      <div class="hrvatski-zbor-uitelja-container">
        <span class="hrvatski-zbor-uitelja-container1">
          <span class="hrvatski-zbor-uitelja"
            >Hrvatski zbor učitelja i trenera sportova na snijegu (</span
          >
          <b>HZUTS</b>
          <span class="dobrovoljna-je-strukovna"
            >) dobrovoljna je strukovna organizacija u koju se udružuju
            voditelji, učitelji i treneri sportova na snijegu, i njihova
            udruženja s područja djelovanja Hrvatskog skijaškog saveza.</span
          >
        </span>
      </div>
    </section>
    <FrameHZUTS /><FrameComponent />
  </div>
</template>
<script>

import galerijaLayout from '../layouts/galerija.vue'
import appLayout from '../layouts/app.vue'
import { mapState } from 'vuex'
import { Link, Head } from '@inertiajs/inertia-vue'
import _ from "lodash";

  import { defineComponent } from "vue";
  import FrameHZUTS from "../components/osninf/frame-h-z-u-t-s.vue";
  import FrameComponent from "../components/osninf/frame-component.vue";

  export default defineComponent({
    name: "osnovneinformacije",
    layout: [appLayout, galerijaLayout],
    components: { FrameHZUTS, FrameComponent ,
        Link,
    Head },



    computed: {
    ...mapState({
      appName(state) {
        return this.$_.find(state.themeConfigurations, { key: "appName" }).value;
      },
    }),
  },
  

  }, 
  

  );


</script>
<style scoped>
  .osnovne-informacije {
    height: 3rem;
    position: relative;
    letter-spacing: 3px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 100%;
  }
  .hrvatski-zbor-uitelja {
    font-weight: 500;
  }
  .dobrovoljna-je-strukovna {
    font-weight: 500;
  }
  .hrvatski-zbor-uitelja-container1 {
    width: 100%;
  }
  .hrvatski-zbor-uitelja-container {
    width: 59.25rem;
    height: 4.5rem;
    position: relative;
    font-size: 1.25rem;
    display: flex;
    align-items: center;
    max-width: 100%;
  }
  .naslovni-frame {
    align-self: stretch;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 10.88rem 1.25rem;
    box-sizing: border-box;
    gap: 3.13rem;
    background-image: url("/storage/slike/osnovneinformacije/naslovni-frame@3x.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    max-width: 100%;
    flex-shrink: 0;
    text-align: center;
    font-size: 2.5rem;
    color: #fff;
    font-family: Inter;
  }
  .osnovn-informacije {
    width: 100%;
    height: 100%;
    position: relative;
    background-color: #f8f7f5;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 3.75rem 0rem;
    box-sizing: border-box;
    gap: 1.75rem;
    letter-spacing: normal;
  }

  @media screen and (max-width: 1150px) {
    .osnovn-informacije {
      height: auto;
    }
  }
  @media screen and (max-width: 1050px) {
    .osnovne-informacije {
      font-size: 2rem;
    }
  }
  @media screen and (max-width: 750px) {
    .naslovni-frame {
      gap: 1.56rem;
      padding-top: 7.06rem;
      padding-bottom: 7.06rem;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 450px) {
    .osnovne-informacije {
      font-size: 1.5rem;
    }

    .hrvatski-zbor-uitelja-container {
      font-size: 1rem;
    }
  }

  @media screen and (max-width: 370px) {
    .naslovni-frame {
      gap: 4rem;

    }
  }

</style>

