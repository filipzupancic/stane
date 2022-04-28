require('./bootstrap');

require('alpinejs');

import { createApp, Vue } from "vue"
import RadialProgressBar from "vue3-radial-progress"
import Chat from "vue3-beautiful-chat"
import VueApexCharts from "vue3-apexcharts"
import router from './router'
import Welcome from './components/Welcome'
import Costs from './components/Costs'
import Costs2Action from './components/Costs2Action'
import Co2 from './components/Co2'
import Co2Action from './components/Co2Action'
import Investments from './components/Investments'
import Dashboard from './components/Dashboard'
import Home from './components/Home'
import Notifications from './components/Notifications'
import Documents from './components/Documents'

createApp({
    components: {
        Welcome,
        Costs,
        Co2, 
        Investments,
        Dashboard,
        Home,
        Notifications,
        Documents,
        Co2Action,
        Costs2Action,
    }
})
.use(router)
.use(Chat)
.use(RadialProgressBar)
.use(VueApexCharts)
.mount('#app')
