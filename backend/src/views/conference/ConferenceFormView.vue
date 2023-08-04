<script setup>
import { ref } from "vue";
const regions = [
  { id: 1, name: "Dar es salaam" },
  { id: 2, name: "Arusha" },
  { id: 3, name: "Dodoma" },
  { id: 4, name: "Morogoro" },
];
const data = {
    theme:'',
    regionID: '',
    venue: '',
    registeredPrice: '',
    nonRegisteredPrice: '',
    startDate: '',
    endDate: '',
    message: '',
};
const handleSubmit = () => {
  alert(data);
};
</script>
<template>
  <div>
    <h2>New Conference</h2>
    <div class="row justify-content-center">
      <div class="col-md-10 form-bg">
        <form
          class="row g-3 needs-validation"
          novalidate
          @submit.prevent="handleSubmit"
        >
          <div class="mb-3">
            <label class="form-label" for="themeText">Conference Theme</label>
            <textarea
              v-model="data.theme"
              class="form-control"
              id="themeText"
              rows="2"
            ></textarea>
          </div>
          <div class="col-md-6">
            <label for="regionSelect" class="form-label">Region</label>
            <select class="form-select" id="regionSelect" required v-model="data.regionID">
              <option selected disabled value="">Choose...</option>
              <option
                v-for="region in regions"
                :key="region.id"
                :value="region.id"
              >
                {{ region.name }}
              </option>
            </select>
            <div class="invalid-feedback">Please select a valid Region.</div>
          </div>
          <div class="col-md-6">
            <label for="venueInput" class="form-label">Venue</label>
            <input
              type="text"
              class="form-control"
              id="venueInput"
              v-model="data.venue"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-6">
            <label for="priceInput1" class="form-label">Registed Price</label>
            <input
              v-model="data.registeredPrice"
              type="number"
              class="form-control"
              id="priceInput1"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-6">
            <label for="priceInput2" class="form-label"
              >Non-Registed Price</label
            >
            <input
              v-model="data.nonRegisteredPrice"
              type="number"
              class="form-control"
              id="priceInput2"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="startDate" class="form-label">Starting Date</label>
              <input
                v-model="data.startDate"
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
                v-model="data.endDate"
                type="date"
                class="form-control"
                id="endDate"
                required
              />
              <div class="valid-feedback">Looks good!</div>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="conferenceMessageText"
              >Conference Message</label
            >
            <textarea
              v-model="data.message"
              class="form-control"
              id="conferenceMessageText"
              rows="3"
            ></textarea>
          </div>
          <div class="col-12 d-grid gap-2">
            <button class="btn btn-lg btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>