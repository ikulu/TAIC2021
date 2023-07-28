<script setup>

const handleSubmit = ()=> {
  alert('Clicked')
}
</script>
<template>
  <div>
    <h2>New Contributor</h2>
    <div class="row justify-content-center">
      <div class="col-md-10 form-bg">
        <form
          class="row g-3 needs-validation"
          novalidate
          @submit.prevent="handleSubmit"
        >
          <div class="col-md-4">
            <label for="contributorName" class="form-label">Name</label>
            <input
              type="text"
              class="form-control"
              id="contributorName"
              v-model="contributorName"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="col-md-4">
            <label for="contributorCategory" class="form-label">Category</label>
            <select class="form-select" id="contributorCategory" required>
              <option selected disabled value="">Choose...</option>
              <option>Patners</option>
              <option>Exhibitors</option>
              <option>Hotels</option>
            </select>
            <div class="invalid-feedback">Please select a valid Region.</div>
          </div>
          <div class="col-md-4">
            <label for="WebsiteLink" class="form-label">Website Link </label>
            <input
              type="text"
              class="form-control"
              id="WebsiteLink"
              v-model="WebsiteLink"
              required
            />
            <div class="valid-feedback">Looks good!</div>
          </div>
          <div class="mb-3 col-md-12">
            <label class="form-label" for="contributorLogo">Logo|Brand</label>
            <input
              class="form-control"
              id="contributorLogo"
              type="file"
            />
          </div>

          <div class="col-12 d-grid gap-2">
            <button class="btn btn-lg btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>