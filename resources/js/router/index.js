import { createRouter, createWebHistory } from "vue-router";
import Welcome from '../components/Welcome'

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})