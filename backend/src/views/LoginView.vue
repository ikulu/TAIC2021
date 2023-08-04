<script setup>
import { ref } from "vue";

const userCredational = {}

const handleSubmit = () => {
  console.log(userCredational);
};
</script>

<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <form @submit.prevent="handleSubmit">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>TAIC</h1>
                  <small class="text-primary">Admin</small>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <div class="input-group mb-3">
                    <span class="input-group-text">
                      <svg class="icon">
                        <use
                          xlink:href="../assets/coreUI_assets/vendors/@coreui/icons/svg/free.svg#cil-user"
                        ></use></svg
                    ></span>
                    <input
                      v-model="userCredational.email"
                      class="form-control"
                      type="text"
                      placeholder="User Email"
                    />
                  </div>
                  <div class="input-group mb-4">
                    <span class="input-group-text">
                      <svg class="icon">
                        <use
                          xlink:href="../assets/coreUI_assets/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"
                        ></use></svg
                    ></span>
                    <input
                      v-model="userCredational.password"
                      class="form-control"
                      type="password"
                      placeholder="Password"
                    />
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">
                        Sign In
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>