<template>
  <div>
    <Head title="Dashboard" />
    <h1 class="mb-8 text-3xl font-bold">Dashboard</h1>
    <p class="mb-8 leading-normal">
      Hey there! Welcome to WeatherTaco! ☀️🌮 A code challenge from the super cool Discovery team!
      <br>
      <br>
      Relax, grab a cup o' ☕️ or a 🥤. Most of all, have fun and show us your slick coding skills!
    </p>
  </div>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'

export default {
  components: {
    Head,
  },
  layout: Layout,
}
</script>
