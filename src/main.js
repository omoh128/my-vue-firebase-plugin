import Vue from 'vue';
import App from './App.vue';
import VueRouter from 'vue-router'; // Import VueRouter

// Import your Vue.js components here
import Home from './components/Home.vue';
import About from './components/About.vue';
import EventList from './components/EventList.vue'; // Import the EventList component
import EventDetails from './components/EventDetails.vue';
import RegistrationForm from './components/RegistrationForm.vue'; 


Vue.use(VueRouter); // Use VueRouter

const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/events', component: EventList }, // Add a new route for EventList
  { path: '/events/:eventId', component: EventDetails },
  { path: '/register', component: RegistrationForm },
  // Define other routes here
];

const router = new VueRouter({
  mode: 'history',
  routes,
});

new Vue({
  el: '#my-vue-firebase-app',
  render: (h) => h(App),
  router, // Add the router to the Vue instance
});

