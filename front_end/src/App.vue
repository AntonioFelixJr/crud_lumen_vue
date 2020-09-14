<template>
  <div id="app">
    <TemplatePage>
     <router-view />
    </TemplatePage>
  </div>
</template>

<script>
import TemplatePage from '@/pages/layout/TemplatePage.vue'

export default {
  name: 'App',
  components: {
    TemplatePage
  }
}

</script>

<style>

</style>
