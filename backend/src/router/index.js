import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import LoginView from '../views/LoginView.vue'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Landing',
      component: LandingView
    },
    {
      path: '/auth/dashboard',
      name: 'Home',
      component: HomeView
    },
    {
      path: '/auth/login',
      name: 'login',
      component: LoginView
     
    }
  ]
})

export default router
