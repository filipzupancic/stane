import { createRouter, createWebHistory } from "vue-router";
import Welcome from '../components/Welcome'
import Costs from '../components/Costs'

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/costs',
        name: 'costs',
        component: Costs
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})