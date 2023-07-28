<script setup>
import { useMainStore } from '../../stores/mainStore';
const mainStore = useMainStore()
import ContributorCard from '../../components/ContributorCard.vue';

</script>
<template>
  <div>
    <h2>Event Contributors</h2>
    <div class="row justify-content-center">
      <div class="col-md-10">
            <div class="row">
                <ContributorCard v-for="item in mainStore.contributors" :key="item.contributorName" 
                 :contributorName="item.contributorName"
                 :contributorCategory="item.contributorCategory"
                 :contributorLogo="item.contributorLogo"
                 :websiteLink="item.websiteLink"
                />
              
            </div>
      </div>
    </div>
  </div>
</template>
