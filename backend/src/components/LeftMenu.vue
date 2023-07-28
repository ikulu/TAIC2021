<script setup>
import { RouterLink } from "vue-router";
</script>
<template>
  <div class="sidebar sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <span>TAIC</span>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item">
        <router-link :to="{ name: 'Home' }" class="nav-link">
          
          Dashboard
        </router-link>
      </li>

      <li class="nav-title">Components</li>
      <li class="nav-group">
        <a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use
              xlink:href="../assets/coreUI_assets/vendors/@coreui/icons/svg/free.svg#cil-puzzle"
            ></use>
          </svg>
          Conference</a
        >
        <ul class="nav-group-items">
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'ConferenceForm' }">
              <span class="nav-icon"></span>Create New
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'CurrentConference' }">
              <span class="nav-icon"></span>Confences
            </router-link>
          </li>
        </ul>
      </li>
      <li class="nav-group">
        <a class="nav-link nav-group-toggle" href="#">
          
          Guest Speaker</a
        >
        <ul class="nav-group-items">
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'GuestForm' }">
              <span class="nav-icon"></span>New Speaker
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'Guests' }">
              <span class="nav-icon"></span>Speakers
            </router-link>
          </li>
        </ul>
      </li>
      <li class="nav-group">
        <a class="nav-link nav-group-toggle" href="#">
          
          Event Contributors</a
        >
        <ul class="nav-group-items">
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'EventContributorForm' }">
              <span class="nav-icon"></span>New Contributor
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{ name: 'EventContributor' }">
              <span class="nav-icon"></span>Event Contributors
            </router-link>
          </li>
        </ul>
      </li>
      
      <li class="nav-divider"></li>
      <li class="nav-title">Extras</li>
    </ul>
    <button
      class="sidebar-toggler"
      type="button"
      data-coreui-toggle="unfoldable"
    ></button>
  </div>
</template>

<style scoped>
.sidebar {
  background-color: rgb(23, 55, 80);
}
.sidebar-brand{
  font-size: x-large;
  font-family: Georgia, 'Times New Roman', Times, serif;
}
</style>