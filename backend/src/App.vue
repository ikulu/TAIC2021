<script setup>
import { RouterLink, RouterView } from 'vue-router'
import AppLayout from './components/AppLayout.vue';
</script>

<template>
  <div>
    <AppLayout>
      <RouterView />
    </AppLayout>
  </div>
</template>

<style scoped>

</style>
