import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import LoginView from '../views/LoginView.vue'
import HomeView from '../views/HomeView.vue'
import ConferenceFormView from '../views/conference/ConferenceFormView.vue'
import CurrentConferenceView from '../views/conference/CurrentConferenceView.vue'
import PreviousConferenceView from '../views/conference/PreviousConferenceView.vue'

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
      path: '/auth/enroll-conference',
      name: 'ConferenceForm',
      component: ConferenceFormView
    },
    {
      path: '/auth/current-conference',
      name: 'CurrentConference',
      component: CurrentConferenceView
    },
    {
      path: '/auth/previous-conference',
      name: 'PreviousConference',
      component: PreviousConferenceView
     
    }
  ]
})

export default router
