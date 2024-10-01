import { createRouter, createWebHistory} from "vue-router";

import onboarding from '../components/onboarding.vue'

const routes = [
    {
        path:'/',
        name: 'onboarding',
        component: onboarding
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
