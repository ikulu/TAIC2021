<script setup>
import { useMainStore } from "../../stores/mainStore";
import GuestCard from "../../components/GuestCard.vue";
const mainStore = useMainStore();
</script>

<template>
  <div>
    <h2>Guests Speakers</h2>
    <div class="row justify-content-center">
        <div class="col-md-12" v-for="item in mainStore.guests" :key="item.name">
            <GuestCard 
            :name="item.name"
            :occupation="item.occupation"
            :specialization="item.specialization"
            :twitterLink="item.twitterLink"
            :profileImgLink="item.profileImgLink"
            />
        </div>
    </div>
  </div>
</template>

<style scoped>
</style>