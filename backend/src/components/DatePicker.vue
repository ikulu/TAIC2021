<script setup>
import { ref } from "vue";
const startDate = ref(new Date());
const endDate = ref(new Date());
</script>

<template>
  <div class="row">
    <div class="col-md-6">
      <label for="startDate" class="form-label">Starting Date</label>
      <input
        v-model="startDate"
        type="date"
        class="form-control"
        id="startDate"
        required
      />
      <div class="valid-feedback">Looks good!</div>
    </div>
    <div class="col-md-6">
      <label for="endDate" class="form-label">End Date</label>
      <input
        v-model="endDate"
        type="date"
        class="form-control"
        id="endDate"
        required
      />
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>
</template>
