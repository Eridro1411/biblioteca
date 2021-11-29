<template>
  <div id="app" class="w-full h-full">
    <Navigation></Navigation>
    <router-view></router-view>
  </div>
</template>

<script>
import Navigation from "./components/Navigation.vue"
export default {
  name: 'App',
  components: {
    Navigation
  }
}
</script>

<style>
body {
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
</style>