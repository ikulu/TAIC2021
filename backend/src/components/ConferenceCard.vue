<script setup>
import { ref } from "vue";
const props = defineProps({
  theme: String,
  region: String,
  venue: String,
  startDate: Date,
  endDate: Date,
  registeredPrice: Number,
  nonRegisteredPrice: Number,
});
</script>
<template>
  <div>
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="tab-content rounded-bottom">
          <div
            class="tab-pane p-3 active preview"
            role="tabpanel"
            id="preview-1217"
          >
            <div class="card">
              <div class="card-header">
                <b class="text-light">
                  TAIC -
                  {{ props.startDate.getFullYear() }}</b
                >
              </div>
              <div class="card-body">
                <h5 class="card-title">
                  {{ props.region }} -
                  <small class="">{{ props.venue }}</small>
                </h5>
                <p class="card-text text-center">{{ props.theme }}</p>

                <div class="row">
                  <div class="col-6">
                    <p class="card-text">
                      <span class=""> Registered Professional Price: </span>
                      <span class="price">
                        {{ props.registeredPrice }}
                      </span>
                    </p>
                  </div>
                  <div class="col-6">
                    <span class=""> Non Registered Individual Price: </span>
                    <span class="price">
                      {{ props.nonRegisteredPrice }}
                    </span>
                  </div>
                </div>
                <div class="date-times">
                  <div class="row mt-1 justify-content-center">
                    <div class="col-md-2 text-left">From :</div>
                    <div class="col-md-10">
                      <span class="date">{{ props.startDate }}</span>
                    </div>
                  </div>
                  <div class="row mt-1 justify-content-center">
                    <div class="col-md-2">To :</div>
                    <div class="col-md-10">
                      <span class="date">{{ props.endDate }}</span>
                    </div>
                  </div>
                  <div class="float-end">
                    <a class="btn btn-outline-info small m-1">Edit Details</a>
                    <a class="btn btn-outline-danger small m-1">Disable</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.card-header {
  /* background-color: rgba(119, 205, 38, 0.45); */
  background-color: rgba(23, 55, 80);
  text-align: center;
  font-size: larger;
}
.price {
  font-family: Arial, Helvetica, sans-serif;
  color: rgb(255, 136, 0);
  text-align: right;
  border-radius: 2rem;
  background-color: beige;
  padding: 0.4rem;
  margin: 0.4rem;
}
.date-times {
  padding: 0.1rem;
  margin: 1rem 0.6rem;
  text-decoration: none;
  color: black;
}
.date {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: small;
  padding: 0.3rem;
  margin: 0.4rem;
  background-color: bisque;
  border-radius: 0.5rem;
}
</style>