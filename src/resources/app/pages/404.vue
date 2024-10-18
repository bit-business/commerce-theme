<template>
  <div class="text-center py-2">
    <Head :title="$page.props.name" />

    <div class="text-2xl">{{ $t('nije-pronadena-stranica') }}</div>
    <Link :href="route('skijasi.commerce-theme.home')" class="text-primary font-bold">
      {{ $t('odi-na-pocetnu-stranicu') }}
    </Link>
  </div>
</template>

<script>
import appLayout from "../layouts/app.vue";
import categoryLayout from "../layouts/kategorija.vue";
import { Link, Head } from "@inertiajs/inertia-vue";

export default {
  layout: [appLayout, categoryLayout],
  components: {
    Link,
    Head,
  },
};
</script>