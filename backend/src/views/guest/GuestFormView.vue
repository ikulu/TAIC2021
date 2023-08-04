<script setup>
import { ref } from 'vue';
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
    <h2>New Guest Speaker</h2>
    <div class="row justify-content-center">
      <div class="col-md-10 form-bg">
        <form class="row  g-3 needs-validation" novalidate @submit.prevent="handleSubmit">
            
          <div class="col-md-4">
            <label for="firstName" class="form-label">First Name</label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              v-model="firstName"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-4">
            <label for="middleName" class="form-label">Middle Name</label>
            <input
              type="text"
              class="form-control"
              id="middleName"
              v-model="middleName"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-4">
            <label for="lastName" class="form-label">Sur Name</label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              v-model="lastName"
              required
            />
            
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-6">
            <label for="titleName" class="form-label">Title Name</label>
            <select class="form-select" id="titleName" required>
              <option selected disabled value="">Choose...</option>
              <option>Dr.</option>
              <option>Prof.</option>
              <option>Eng.</option>
              <option>Hon.</option>
              <option>Mr.</option>
              <option>Mrs.</option>
            </select>
            <div class="invalid-feedback">Please select a valid Region.</div>
          </div>
          <div class="col-md-6">
            <label for="occupation" class="form-label">Occupation</label>
            <input
              type="text"
              class="form-control"
              id="occupation"
              v-model="occupation"
              required
            />
            
            <div class="valid-feedback">Looks good!</div>
          </div>

          <div class="col-md-6">
            <label for="twitter" class="form-label">Twitter Profile</label>
            <input
              type="text"
              class="form-control"
              id="twitter"
              v-model="twitter"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-6">
            <label for="titleLabel" class="form-label">Invitation Type</label>
            <select class="form-select" id="titleLabel" required>
              <option selected disabled value="">Choose...</option>
              <option>Speaker</option>
              <option>Guest Honor</option>
            </select>
            <div class="invalid-feedback">Please select a valid Region.</div>
          </div>
          <div class="mb-3 col-md-12">
                          <label class="form-label" for="guestProfileImg">Profile</label>
                          <input class="form-control" id="guestProfileImg" type="file" placeholder="Choose Image">
                        </div>
          
          <div class="col-12 d-grid gap-2">
            <button class="btn btn-lg btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>