<script setup>
import { RouterLink } from 'vue-router';
</script>
<template>
  <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg
        class="sidebar-brand-full"
        width="118"
        height="46"
        alt="CoreUI Logo"
      >
        <use xlink:href="../assets/coreUI_assets/assets/brand/coreui.svg#full"></use>
      </svg>
      <svg
        class="sidebar-brand-narrow"
        width="46"
        height="46"
        alt="CoreUI Logo"
      >
        <use xlink:href="../assets/coreUI_assets/assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item">
        <router-link :to="{name:'Home'}" class="nav-link">
          <svg class="nav-icon">
            <use
              xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"
            ></use>
          </svg>
          Dashboard
        </router-link>
        
      </li>
      
      <li class="nav-title">Components</li>
      <li class="nav-group">
        <a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use
              xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"
            ></use>
          </svg>
          Conferences</a
        >
        <ul class="nav-group-items">
          <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'ConferenceForm'}">
              <span class="nav-icon"></span>Create New            
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'CurrentConference'}">
              <span class="nav-icon"></span>Current            
            </router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" :to="{name: 'PreviousConference'}">
              <span class="nav-icon"></span>Previous            
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