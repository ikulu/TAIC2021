<script setup>
import LeftMenu from "./LeftMenu.Vue";
import HeaderMenu from "./HeaderMenu.vue";
import AppFooter from "./AppFooter.vue";
</script>

<template>
  <div>
    <LeftMenu />
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <HeaderMenu />
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <slot></slot>
        </div>
      </div>
      <!-- Footer  -->
        <AppFooter />
    </div>
  </div>
</template>