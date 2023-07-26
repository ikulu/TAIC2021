// import './assets/main.css'
import './assets/coreUI_assets/css/style.css'
import './assets/coreUI_assets/css/examples.css'
import './assets/coreUI_assets/css/vendors/simplebar.css'
import './assets/coreUI_assets/vendors/simplebar/css/simplebar.css'
import './assets/coreUI_assets/vendors/@coreui/chartjs/css/coreui-chartjs.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')
