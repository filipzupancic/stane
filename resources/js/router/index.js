import { createRouter, createWebHistory } from "vue-router";
import Welcome from '../components/Welcome'
import Home from '../components/Home'
import Costs from '../components/Costs'
import Costs2Action from '../components/Costs2Action'
import Co2 from '../components/Co2'
import Co2Action from '../components/Co2Action'
import Investments from '../components/Investments'
import Dashboard from '../components/Dashboard'
import Notifications from '../components/Notifications'
import Documents from '../components/Documents'
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
        path: '/nizji-stroski',
        name: 'costs2action',
        component: Costs2Action
    },
    {
        path: '/eko',
        name: 'co2',
        component: Co2
    },
    {
        path: '/eko-akcija',
        name: 'co2action',
        component: Co2Action
    },
    {
        path: '/nalozbe',
        name: 'investments',
        component: Investments
    },
    {
        path: '/dokumenti',
        name: 'documents',
        component: Documents
    },
    {
        path: '/obvestila',
        name: 'notifications',
        component: Notifications
    },
    {
        path: '/profil',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/documents/create',
        name: 'documents.create',
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