require('./bootstrap');

require('alpinejs');

import { createApp, Vue } from "vue"
import RadialProgressBar from "vue3-radial-progress"
import Chat from "vue3-beautiful-chat"
import VueApexCharts from "vue3-apexcharts"
import router from './router'
import Loans from './components/Loans'
import Costs from './components/Costs'
import Costs2Action from './components/Costs2Action'
import Co2 from './components/Co2'
import Co2Action from './components/Co2Action'
import Investments from './components/Investments'
import Dashboard from './components/Dashboard'
import Home from './components/Home'
import Notifications from './components/Notifications'
import Documents from './components/Documents'
import StepOne from './components/loans/StepOne'
import StepTwo from './components/loans/StepTwo'
import StepThree from './components/loans/StepThree'
import StepFour from './components/loans/StepFour'
import StepFive from './components/loans/StepFive'
import Calendar from './components/Calendar'

createApp({
    components: {
        Loans,
        Costs,
        Co2, 
        Investments,
        Dashboard,
        Home,
        Notifications,
        Documents,
        Co2Action,
        Costs2Action,
        StepOne,
        StepTwo,
        StepThree,
        StepFour,
        StepFive,
        Calendar,
    }
})
.use(router)
.use(Chat)
.use(RadialProgressBar)
.use(VueApexCharts)
.mount('#app')
