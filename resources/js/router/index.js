import { createRouter, createWebHistory } from "vue-router";
import Welcome from '../components/Welcome'
import Costs from '../components/Costs'
import Co2 from '../components/Co2'
import Investments from '../components/Investments'


const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/stroski',
        name: 'costs',
        component: Costs
    },
    {
        path: '/co2',
        name: 'co2',
        component: Co2
    },
    {
        path: '/portfelj',
        name: 'investments',
        component: Investments
    },
]

export default createRouter({
    history: createWebHistory(),
    routes
})