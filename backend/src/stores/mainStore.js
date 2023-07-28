import { defineStore } from "pinia";
import { ref, computed } from "vue";

export const useMainStore = defineStore('mainStore',{
    state:()=>({
        test:92,
        conference : [
            {
                id:1,
              theme: "Hello there this is Theme",
              region: "Dar Es Salaam",
              venue: "Selena Hotel",
              startDate: new Date(),
              endDate: new Date(),
              registeredPrice: 350000,
              nonRegisteredPrice: 400000,
            },
            {
                id:2,
              theme: "Last year Arusha Themee",
              region: "Arusha",
              venue: "Arusha International Convention",
              startDate: new Date(),
              endDate: new Date(),
              registeredPrice: 350000,
              nonRegisteredPrice: 400000,
            },
            {
                id:3,
              theme: "Dodoma Theme Live",
              region: "Dodoma",
              venue: "Jakaya Int. Convention",
              startDate: new Date(),
              endDate: new Date(),
              registeredPrice: 350000,
              nonRegisteredPrice: 400000,
            }
            ],
        guests: [
          {
            name : "Eng Stanley J Mahenge",
            titleLabel : "Guest of Honor",
            profileImgLink : "stan.jpg",
            occupation : "Computer Engineer - ICTC",
            twitterLink : "twitter@adim.com",
            specialization : "Capacity Building",
            showStatus : false
          },
          {
            name : "Prof Ester Brown",
            titleLabel : "Guest of Honor",
            profileImgLink : "ester.jpg",
            occupation : "Network Admin - ICTC",
            twitterLink : "twitter@ester.com",
            specialization : "Digital Innovation",
            showStatus : false
          },
          {
            name : "SPA Francis Rovenus",
            titleLabel : "Guest of Honor",
            profileImgLink : "rev.jpg",
            occupation : "Cheif Accountant - ICTC",
            twitterLink : "twitter@rev.com",
            specialization : "Finincial Growth",
            showStatus : false
          }
        ] ,
        contributors:[
          {
            contributorName: "Vodacom",
            contributorCategory: "Exhibitor",
            contributorLogo: "stan.jpg",
            websiteLink: "www.Vodacom.ac.tz",
          },
          {
            contributorName: "Tigo",
            contributorCategory: "Patner",
            contributorLogo: "ester.jpg",
            websiteLink: "www.tigo.ac.tz",
          },
          {
            contributorName: "Selena Hotel",
            contributorCategory: "Hotel",
            contributorLogo: "rev.jpg",
            websiteLink: "www.selena.ac.tz",
          },
        ],

    }),
    actions: {
        
    },
    getters:{

    }
})