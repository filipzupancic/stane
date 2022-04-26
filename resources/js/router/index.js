import { createRouter, createWebHistory } from "vue-router";
import Welcome from '../components/Welcome'
import Home from '../components/Home'
import Costs from '../components/Costs'
import Co2 from '../components/Co2'
import Investments from '../components/Investments'
import Dashboard from '../components/Dashboard'
import AddDocument from '../components/documents/AddDocument'
import EditDocument from '../components/documents/EditDocument'


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
    {
        path: '/documents/add',
        name: 'documents.add',
        component: AddDocument
    },
    {
        path: '/documents/:id/edit',
        name: 'documents.edit',
        component: EditDocument,
        props: true
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})