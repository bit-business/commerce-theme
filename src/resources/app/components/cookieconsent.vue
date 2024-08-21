<template>
  <div>
    <vue-cookie-accept-decline
      v-if="showCookieConsent"
      :debug="false"
      :position="'bottom-right'"
      :disableDecline="true"
      :transitionName="'slideFromBottom'"
      :elementId="'cookie-consent-id'" 
      @accept="acceptCookies('all')"
    >
       <!-- @decline="acceptCookies('functional')" -->
      <template v-slot:message>
        Koristimo samo nužne kolačiće kako bismo omogućili funkcioniranje web stranice. 
        <a class="custom-link" href="https://hzuts.hr/politikakolacica" target="_blank">Saznajte više</a><br>
      </template>
      <template v-slot:acceptContent class="gumb">
        U redu
      </template>
      <!-- <template v-slot:declineContent>
        Funkcionalni
      </template> -->
    </vue-cookie-accept-decline>
  </div>
</template>

<script>
import VueCookieAcceptDecline from 'vue-cookie-accept-decline';
import 'vue-cookie-accept-decline/dist/vue-cookie-accept-decline.css';

export default {
  name: 'CookieConsent',
  components: {
    VueCookieAcceptDecline
  },
  data() {
    return {
      showCookieConsent: false
    };
  },
  mounted() {
  const existingConsent = localStorage.getItem('cookieConsent');
  if (!existingConsent) {
    setTimeout(() => {
      this.showCookieConsent = true;
    }, 3000);
  }
},
  methods: {
    acceptCookies(type) {
      if (type === 'all') {
        // Enable all cookies, including analytics
        this.initializeAnalytics();
        localStorage.setItem('cookieConsent', 'all');
      // } else {
      //   // Only enable functional cookies
      //   localStorage.setItem('cookieConsent', 'functional');
      // }
    }
  //   initializeAnalytics() {
  //     if (window.measurement_id) {
  //       window.gtag('js', new Date());
  //       window.gtag('config', window.measurement_id);
  //     }
  //   }
  // }
},
}
}
</script>

<style scoped>



/* Style for the custom link */
.custom-link {
   /* Blue color for the link */
  text-decoration: underline; /* Underline the link */
}

.custom-link:hover {
  color: #03a9f4; /* Darker blue on hover */
}


/* Custom styles for the accept button */
#cookie-consent-id >>> .cookie__bar__buttons__button--accept,
#cookie-consent-id >>> .cookie__floating__buttons__button--accept {
  background: #03a9f4 !important; /* Blue background */
  color: #fff !important; /* White text */
}

#cookie-consent-id >>> .cookie__bar__buttons__button--accept:hover,
#cookie-consent-id >>> .cookie__floating__buttons__button--accept:hover {
  background: #0288d1 !important; /* Darker blue on hover */
  color: #fff !important; /* White text */
}

</style>
