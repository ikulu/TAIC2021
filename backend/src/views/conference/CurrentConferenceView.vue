<script setup>
import ConferenceCard from '../../components/ConferenceCard.vue'
import {useMainStore} from '@/stores/mainStore'
const mainStore = useMainStore()

</script>
<template>
    <div>
        <h2> Current Conference {{mainStore.conference.len}}</h2>
        <div v-for="item in mainStore.conference" :key="item.id">
            <ConferenceCard 
            :theme="item.theme"
            :region="item.region"
            :venue="item.venue"
            :startDate="item.startDate"
            :endDate="item.endDate"
            :registeredPrice="item.registeredPrice"
            :nonRegisteredPrice="item.nonRegisteredPrice"
             />
        </div>
    </div>
</template>