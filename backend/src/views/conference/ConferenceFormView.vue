<script setup>
import { ref } from 'vue';
import DatePicker from '../../components/DatePicker.vue'
const theme = ref('')
const regionId = ref('')
const venue = ref('')
const registeredPrice = ref('')
const nonRegisteredPrice = ref('')
const message = ref('')
const handleSubmit = ()=>{
    alert('Hello From submit')
}
</script>
<template>
  <div>
    <h2>New Conference</h2>
    <div class="row justify-content-center">
      <div class="col-md-10 form-bg">
        <form class="row g-3 needs-validation" novalidate @submit.prevent="handleSubmit">
            <div class="mb-3">
            <label class="form-label" for="themeText"
              >Conference Theme</label
            >
            <textarea
                v-model="theme"
              class="form-control"
              id="themeText"
              rows="2"
            ></textarea>
          </div>
          <div class="col-md-6">
            <label for="regionSelect" class="form-label">Region</label>
            <select class="form-select" id="regionSelect" required>
              <option selected disabled value="">Choose...</option>
              <option>...</option>
            </select>
            <div class="invalid-feedback">Please select a valid Region.</div>
          </div>
          <div class="col-md-6">
            <label for="venueInput" class="form-label">Venue</label>
            <input
              type="text"
              class="form-control"
              id="venueInput"
              v-model="venue"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-6">
            <label for="priceInput1" class="form-label">Registed Price</label>
            <input
                v-model="registeredPrice"
              type="number"
              class="form-control"
              id="priceInput1"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-6">
            <label for="priceInput2" class="form-label">Non-Registed Price</label>
            <input
                v-model="nonRegisteredPrice"
              type="number"
              class="form-control"
              id="priceInput2"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <DatePicker />
          <div class="mb-3">
            <label class="form-label" for="conferenceMessageText"
              >Conference Message</label
            >
            <textarea
              v-model="message"
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