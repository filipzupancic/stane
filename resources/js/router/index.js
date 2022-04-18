import { createRouter, createWebHistory } from "vue-router";
import Welcome from '../components/Welcome'
import Home from '../components/Home'
import Costs from '../components/Costs'
import Co2 from '../components/Co2'
import Investments from '../components/Investments'
import Dashboard from "../components/Dashboard.vue";


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/kredit',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/stroski',
        name: 'costs',
        component: Costs
    },
    {
        path: '/eko',
        name: 'co2',
        component: Co2
    },
    {
        path: '/nalozbe',
        name: 'investments',
        component: Investments
    },
    {
        path: '/profil',
        name: 'dashboard',
        component: Dashboard
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})