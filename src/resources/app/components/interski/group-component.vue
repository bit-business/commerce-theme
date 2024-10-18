<template>
  <section class="rectangle-parent108">
    <div class="frame-child144" />
    <h1 class="interski1">INTERSKI</h1>
    <div class="description">
      <div class="interski-kongres-svjetska-container">
        <p class="interski-kongres-svjetska-je-o">
          <b>{{ $t('interski-kongres-svjetska-je-organizacija') }}</b>
          <span class="koja-okuplja-vie"> {{ $t('koja-okuplja-vise-od') }} </span>
          <b class="nacija-i-3">{{ $t('40-nacija-i-3-medunarodne-organizacije') }}</b>
          <span class="span3">.</span>
        </p>
        <p class="blank-line73">&nbsp;</p>
        <p class="odrava-se-svake-4-godine-na-d">
          <span class="odrava-se-svake">{{ $t('odrzava-se-svake') }} </span>
          <b class="godine1">{{ $t('4-godine') }}</b>
          <span> {{ $t('na-drugoj-lokaciji') }}</span>
        </p>
        <p class="blank-line74">&nbsp;</p>
        <p class="ciljevi-interski-kongresa">
          <b>{{ $t('ciljevi-interski-kongresa') }}</b>
        </p>
        <ul class="razvoj-promocija-i-koordinaci">
          <li class="razvoj-promocija-i-koordinaci1">
            <span
              >{{ $t('razvoj-promocija-i-koordinacija-medunarodnih-pitanja-relevantnih-za-sportove-na-snijegu') }}</span
            >
          </li>
          <li class="razvoj-promocija-i-koordinaci2">
            <span
              >{{ $t('razvoj-promocija-i-koordinacija-metodologija-poducavanja-sportova-na-snijegu') }}</span
            >
          </li>
          <li class="razmjena-do-sada-nauenih-i-pr">
            <span
              >{{ $t('razmjena-do-sada-naucenih-i-primijenjenih-znanja-i-vjestina-sportova-na-snijegu') }}</span
            >
          </li>
          <li class="usavravanja-i-unapreenja-na">
            <span
              >{{ $t('usavrsavanja-i-unapredenja-nacina-ucenja-i-tehnika-sportova-na-snijegu') }}</span
            >
          </li>
          <li>
            <span
              >{{ $t('okupljanje-najboljih-skijasa-iz-svake-nacije-skijaskih-medija-strucnjaka-u-industriji-dobavljaca-opreme-i-tisuce-sudionika-ljubitelja-sportova-na-snijegu') }}</span
            >
          </li>
        </ul>
      </div>
      <img
        class="maskota-final-2-12"
        loading="lazy"
        alt=""
        src="/storage/slike/interski/maskota-final-2-1@2x.png"
      />
    </div>
  </section>
</template>
<script>
  import { defineComponent } from "vue";

  export default defineComponent({
    name: "GroupComponent1",
  });
</script>
<style scoped>
  .frame-child144 {
    width: 1440px;
    height: 420px;
    position: relative;
    background-color: #fff;
    display: none;
    max-width: 100%;
    z-index: 1;
  }
  .interski1 {
    margin: 0;
    position: relative;
    font-size: inherit;
    font-weight: 400;
    font-family: inherit;
    z-index: 1;
  }
  .koja-okuplja-vie {
    font-family: Inter;
  }
  .nacija-i-3 {
    font-family: Inter;
  }
  .span3 {
    font-family: Inter;
  }
  .interski-kongres-svjetska-je-o {
    margin: 0;
  }
  .blank-line73 {
    margin: 0;
  }
  .odrava-se-svake {
    font-family: Inter;
  }
  .godine1 {
    font-family: Inter;
  }
  .odrava-se-svake-4-godine-na-d {
    margin: 0;
  }
  .blank-line74 {
    margin: 0;
  }
  .ciljevi-interski-kongresa {
    margin: 0;
  }
  .razvoj-promocija-i-koordinaci1 {
    margin-bottom: 0px;
  }
  .razvoj-promocija-i-koordinaci2 {
    margin-bottom: 0px;
  }
  .razmjena-do-sada-nauenih-i-pr {
    margin-bottom: 0px;
  }
  .usavravanja-i-unapreenja-na {
    margin-bottom: 0px;
  }
  .razvoj-promocija-i-koordinaci {
    margin: 0;
    font-size: inherit;
    padding-left: 27px;
  }
  .interski-kongres-svjetska-container {
    position: absolute;
    top: 42px;
    left: 0px;
    z-index: 1;
  }
  .maskota-final-2-12 {
    position: absolute;
    top: 0px;
    right: 10px;
    width: 150px;
    height: 122px;
    object-fit: contain;
    z-index: 2;
  }
  .description {
    align-self: stretch;
    height: 306px;
    position: relative;
    margin-top: -27px;
    text-align: left;
    font-size: 20px;
    font-family: Inter;
  }
  .rectangle-parent108 {
    align-self: stretch;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 34px 60px 67px;
    box-sizing: border-box;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: "Luckiest Guy";
  }

  @media screen and (max-width: 1200px) {
    .rectangle-parent108 {
      padding-bottom: 140px;
      box-sizing: border-box;
    }
    .maskota-final-2-12 {
    position: absolute;
    top: -36px;
    right: 10px;
    width: 110px;
    height: 75px;
    object-fit: contain;
    z-index: 2;
  }
  }
  @media screen and (max-width: 1050px) {
    .rectangle-parent108 {
      padding-bottom: 160px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 750px) {

    .maskota-final-2-12 {
    position: absolute;
    top: -20px;
    right: 10px;
    width: 80px;
    height: 52px;
    object-fit: contain;
    z-index: 2;
  }

    .interski1 {
      font-size: 32px;
    }

    .rectangle-parent108 {
      padding-left: 30px;
      padding-right: 30px;
      padding-bottom: 172px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 450px) {
    .interski1 {
      font-size: 24px;
    }

    .interski-kongres-svjetska-container {
      font-size: 16px;
    }

    .rectangle-parent108 {
      padding-top: 22px;
      padding-bottom: 150px;
      box-sizing: border-box;
    }
  }
</style>
