<template>
  <section class="rectangle-parent109">
    <div class="frame-child145" />
    <div class="history-details">
      <div class="interski-povijest-parent">
        <h1 class="interski-povijest1">{{ $t('interski-povijest') }}</h1>
        <div class="interski-kongres-osnovali-container">
          <p class="interski-kongres-osnovali">
            {{ $t('interski-kongres-osnovali-su-predstavnici-europskih-alpskih-zemalja-kako-bi-razmijenili-informacije-o-tehnici-i-metodologiji-poducavanja-sportova-na-snijegu-prvi-interski-kongres-odrzan-je-u-1951-g-u-albergu-austrija-a-sjedinjene-americke-drzave-prva-su-van-europska-destinacija-koja-je-ugostila-interski-kongres-1968-g-u-aspenu') }}
          </p>
          <p class="hrvatski-demo-team1">
            {{ $t('hrvatski-demo-team-i-delegacija-su-prvi-puta-nastupili-na-xvi-interski-kongresu-odrzanom-1999-g-u-beitostolenu-norveska-te-su-proglaseni-i-najvecim-iznenadenjem-kongresa') }}
          </p>
        </div>
      </div>
    </div>
    <img
      class="history-image-icon"
      loading="lazy"
      alt=""
      src="/storage/slike/interski/rectangle-278@2x.png"
    />
  </section>
</template>
<script>
  import { defineComponent } from "vue";

  export default defineComponent({
    name: "GroupComponent",
  });
</script>
<style scoped>
  .frame-child145 {
    align-self: stretch;
    height: 420px;
    position: relative;
    background-color: #fff;
    display: none;
  }
  .interski-povijest1 {
    margin: 0;
    width: 338px;
    position: relative;
    font-size: inherit;
    font-weight: 400;
    font-family: inherit;
    display: inline-block;
    max-width: 100%;
    z-index: 1;
  }
  .interski-kongres-osnovali {
    margin: 0;
  }
  .hrvatski-demo-team1 {
    margin: 0;
  }
  .interski-kongres-osnovali-container {
    align-self: stretch;
    position: relative;
    font-size: 20px;
    font-family: Inter;
    text-align: left;
    z-index: 1;
  }
  .interski-povijest-parent {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 15px;
    max-width: 100%;
  }
  .history-details {
    align-self: stretch;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 0px 60px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .history-image-icon {
    align-self: stretch;
    position: relative;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
    z-index: 1;
  }
  .rectangle-parent109 {
    align-self: stretch;

    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 34px 0px 50px;
    box-sizing: border-box;
    gap: 26px;
    max-width: 100%;
    text-align: center;
    font-size: 40px;
    color: #000;
    font-family: "Luckiest Guy";
  }

  @media screen and (max-width: 750px) {
    .interski-povijest1 {
      font-size: 32px;
      text-align: left;
    }

    .history-details {
      padding-left: 30px;
      padding-right: 30px;
      box-sizing: border-box;
    }
  }
  @media screen and (max-width: 450px) {
    .interski-povijest1 {
      font-size: 24px;
    }

    .interski-kongres-osnovali-container {
      font-size: 16px;
    }
  }
</style>
