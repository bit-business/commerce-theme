import Vue from "vue";
import {
  createInertiaApp,
  plugin as InertiaPlugin,
} from "@inertiajs/inertia-vue";
import { Inertia } from "@inertiajs/inertia";
import Vuelidate from "vuelidate";
import currency from "currency.js";
import * as _ from "lodash";
import voca from "voca";
import moment from "moment";
import VueGtag from "vue-gtag";

import VTooltip from "./directives/v-tooltip";
import api from "./api/index";
import store from "./store/index.js";
import helper from "./utils/helper.js";

import CommerceLoading from "./components/commerce-loading.vue";
import Alert from "./components/alert/alert.vue";
import Radio from "./components/form/radio.vue";


import firebase from "firebase/app";
import "firebase/firebase-messaging";
import 'firebase/storage';
import { notificationMessageReceiveHandle } from "./utils/firebase";
import { broadcastMessageHandle } from "./utils/broadcast-messages";


import SsrCarousel from 'vue-ssr-carousel';
import ssrCarouselCss from 'vue-ssr-carousel/index.css';

import VueI18n from 'vue-i18n';
// i18n.js

import en from '../js/lang/modules/en.json';
import hr from '../js/lang/modules/hr.json';
import it from '../js/lang/modules/it.json';

Vue.use(VueI18n);

const i18n = new VueI18n({
  locale: 'hr', // Default language
  fallbackLocale: 'en',
  messages: {
    en,
    hr,
    it
  },
  silentTranslationWarn: true, // Set to false during development to see warnings for missing translations
  missing: (locale, key, vm, values) => {
    console.warn(`[i18n] Missing '${key}' for locale '${locale}'`);
    return key; // return the key itself as fallback
  }
});

// Language change helper
Vue.prototype.$changeLanguage = function(lang) {
  i18n.locale = lang;
  localStorage.setItem('userLanguage', lang);
};

// Load saved language preference on app start
const savedLanguage = localStorage.getItem('userLanguage');
if (savedLanguage) {
  i18n.locale = savedLanguage;
}




Vue.config.productionTip = false;
Vue.config.devtools = true;

Vue.use(Vuelidate);
Vue.directive("tooltip", VTooltip);
Vue.component("commerce-loading", CommerceLoading);
Vue.component("alert", Alert);
Vue.component("radio", Radio);

Vue.component('ssr-carousel', SsrCarousel);


const plugins = process.env.MIX_PAYMENT_MODULE.split(",");

try {
  plugins.forEach((plugin) => {
    const files =
      require(`@/${plugin}/src/resources/payment/components`).default;
    _.forEach(files, (file, index) => {
      Vue.component(index, file);
    });
  });
} catch (error) {}
console.log("TESTBITAN");

//pocetak firebase koda osim importa gore
/*
const firebaseConfig = {
  apiKey: process.env.MIX_FIREBASE_API_KEY,
  authDomain: process.env.MIX_FIREBASE_AUTH_DOMAIN,
  projectId: process.env.MIX_FIREBASE_PROJECT_ID,
  storageBucket: process.env.MIX_FIREBASE_STORAGE_BUCKET,
  messagingSenderId: process.env.MIX_FIREBASE_MESSAGE_SEENDER,
  appId: process.env.MIX_FIREBASE_APP_ID,
  measurementId: process.env.MIX_FIREBASE_MEASUREMENT_ID
};




console.log("Firebase config status:", statusActiveFeatureFirebase);
for (const key in firebaseConfig) {
  if (firebaseConfig[key] === undefined || firebaseConfig[key] === "") {
    console.error("Problematic Firebase config key:", key);
  }
}

let statusActiveFeatureFirebase = true;
for (const key in firebaseConfig)
  statusActiveFeatureFirebase =
    statusActiveFeatureFirebase &&
    firebaseConfig[key] != undefined &&
    firebaseConfig[key] != "";

Vue.prototype.$messaging = {};
Vue.prototype.$messagingToken = {};
Vue.prototype.$statusActiveFeatureFirebase = statusActiveFeatureFirebase;

if ("serviceWorker" in navigator) {
  window.addEventListener("load", () => {
    navigator.serviceWorker
      .register("/firebase-messaging-sw.js")
      .then((register) => {})
      .catch((error) => console.log("Service Worker Firebase Register Failed : ", error));
  });
}

if (statusActiveFeatureFirebase) {
  if (!firebase.apps.length) {
    firebase.initializeApp(firebaseConfig);
    console.log("FIREBASE JE POKRENUT U APP.JS")
  } else {
    firebase.app();
    console.log("FIREBASE1 JE POKRENUT U APP.JS")
  }
  Vue.prototype.$firebase = firebase;
  Vue.prototype.$storage = firebase.storage();
  Vue.prototype.$messaging = firebase.messaging();
  Vue.prototype.$messagingToken = firebase
    .messaging()
    .getToken({ vapidKey: process.env.FIREBASE_WEB_PUSH_CERTIFICATES });
}


const broadcastChannelName = "sw-skijasi-messages";
let broadcastChannel = null;
try {
  broadcastChannel = new BroadcastChannel(broadcastChannelName);
} catch (error) {
  console.error("Broadcast Channel Error ", error);
}

Vue.prototype.$broadcastChannelName = broadcastChannelName;
Vue.prototype.$broadcastChannel = broadcastChannel;
// kraj firebase koda osim na kraju fajla

*/




Vue.prototype.$voca = voca;
Vue.prototype.$api = api;
Vue.prototype.$_ = _;
Vue.prototype.$helper = helper;
Vue.prototype.$sleep = (time) => {
  return new Promise((resolve) => setTimeout(resolve, time));
};
Vue.prototype.$alert = (
  message,
  timeout = 3000,
  backgroundColor = "gray-800",
  textColor = "white"
) => {
  store.dispatch("ADD_TOAST", {
    message,
    backgroundColor,
    timeout,
    textColor,
  });
};
Vue.prototype.$currency = (value) => {
  const moduleConfigurations = store.state.moduleConfigurations;
  const symbol = _.find(moduleConfigurations, { key: "currencySymbol" }).value;
  const precision = parseInt(_.find(moduleConfigurations, { key: "currencyPrecision" }).value);
  const decimal = _.find(moduleConfigurations, { key: "currencyDecimal" }).value;
  const separator = _.find(moduleConfigurations, { key: "currencySeparator" }).value;

  // Parse the input value as a float
  const floatValue = parseFloat(value);

  // Check if the parsed value is a valid number
  if (isNaN(floatValue)) {
    return ''; // Return empty string or some default value for invalid input
  }

  // Format the value using the currency.js library
  let formattedValue = currency(floatValue, {
    precision: precision,
    decimal: decimal,
    separator: separator,
    symbol: ''  // We'll add the symbol manually at the end
  }).format();

  // Add the currency symbol at the end
  formattedValue = formattedValue + ' ' + symbol;

  return formattedValue;
};

Vue.prototype.$moment = moment;
Vue.prototype.$openLoading = () => {
  store.dispatch("SHOW_LOADING");
};
Vue.prototype.$closeLoading = () => {
  store.dispatch("HIDE_LOADING");
};
Vue.use(InertiaPlugin);
Vue.mixin({ methods: { route } });

Inertia.on("navigate", (event) => {
  const page_title = document.title;
  const { href: page_location, pathname: page_path } = window.location;

  const configuration = {
    page_title,
    page_location,
    page_path,
  };

  if (gtag) {
    gtag("js", new Date());
    gtag("config", window.measurement_id, configuration);
  }
});

const appName =
  window.document.getElementsByTagName("title")[0]?.innerText ||
  "Hzuts.hr";

  createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
      const isExists = require
        .context(
          "./../../../../../../resources/js/skijasi/theme/commerce-theme/pages",
          false,
          /\.vue$/
        )
        .keys()
        .some((key) => key.includes(name));
  
      if (isExists) {
        return require(`./../../../../../../resources/js/skijasi/theme/commerce-theme/pages/${name}.vue`);
      } else {
        return require(`./pages/${name}.vue`);
      }
    },
    setup({ el, App, props }) {
      new Vue({
        store,
        i18n, 
        render: (h) => h(App, props),
      }).$mount(el);
    },
  });



// HANDLE FIREBASE MESSAGE
//if (statusActiveFeatureFirebase) notificationMessageReceiveHandle(app);

// HANDLE BROADCAST MESSAGE FROM SERVICE WORKER
//broadcastMessageHandle(app);

// HANDLE OFFLINE MODE ovaj je bio i prije zakomentiran
//checkConnection(app);