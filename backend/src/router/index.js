import { createRouter, createWebHistory } from 'vue-router'
import LandingView from '../views/LandingView.vue'
import LoginView from '../views/LoginView.vue'
import HomeView from '../views/HomeView.vue'
import ConferenceFormView from '../views/conference/ConferenceFormView.vue'
import CurrentConferenceView from '../views/conference/CurrentConferenceView.vue'
import GuestFormView from '../views/guest/GuestFormView.vue'
import GuestView from '../views/guest/GuestView.vue'
import ContributorFormView from '../views/eventContributor/ContributorFormView.vue'
import EventContributorView from '../views/eventContributor/EventContributorView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/cms/login',
      name: 'Login',
      component: LoginView
    },
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
      path: '/auth/conferences',
      name: 'CurrentConference',
      component: CurrentConferenceView
    },
    {
      path: '/auth/enroll-guest',
      name: 'GuestForm',
      component: GuestFormView
     
    },
    {
      path: '/auth/guests',
      name: 'Guests',
      component: GuestView
     
    }, 
    {
      path: '/auth/event-contributor',
      name: 'EventContributor',
      component: EventContributorView
     
    },
    {
      path: '/auth/enroll-event-contributor',
      name: 'EventContributorForm',
      component: ContributorFormView
     
    }
  ]
})

export default router
