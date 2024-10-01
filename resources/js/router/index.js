// src/router/index.js
import { createRouter, createWebHistory } from 'vue-router';
import Onboarding from '../components/onboarding.vue';

const routes = [
  {
    path: '/',
    name: 'Onboarding',
    component: Onboarding,
  },
 
  // Ajoute d'autres routes ici
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
