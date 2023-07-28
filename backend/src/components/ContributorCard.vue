<script setup>
const imgPath = "/src/assets/img/eventcontributors/";
const props = defineProps({
  contributorLogo: String,
  contributorName: String,
  websiteLink:String,
  contributorCategory:  {
    type:String,
    default: 'Default'
  },
});
</script>
<template>
  <div class="col-sm-6 col-lg-4">
    <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
      <div
        class="card-header position-relative d-flex justify-content-center align-items-center"
      >
        <img :src="imgPath + props.contributorLogo" :alt="props.contributorName" />
      </div>
      <div class="card-body row text-center">
        <div class="col">
          <div class="fs-5 fw-semibold text-uppercase">
            {{ props.contributorName }}
          </div>
          <div class="text-uppercase text-medium-emphasis small">
            {{ props.contributorCategory }}
          </div>
          <div class="mt-1">
            <a
            class="btn btn-outline-primary small m-1"
            :href="props.websiteLink"
            >Website</a>
            <a class="btn btn-outline-info small m-1" >Edit Details</a>
                <a class="btn btn-outline-danger small m-1">Disable</a>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.card-header img {
  width: 400px;
  height: 100px;
  border-radius: 0.1rem;
}
</style>