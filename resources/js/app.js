require('./bootstrap');

require('alpinejs');

import { createApp, Vue } from "vue";
import RadialProgressBar from "vue3-radial-progress";
import Chat from "vue3-beautiful-chat"
import router from './router'
import Welcome from './components/Welcome'
import Costs from './components/Costs'
import Co2 from './components/Co2'
import Investments from './components/Investments'
import Dashboard from './components/Dashboard'
import Home from './components/Home'

createApp({
    components: {
        Welcome,
        Costs,
        Co2, 
        Investments,
        Dashboard,
        Home,
    }
})
.use(router)
.use(Chat)
.use(RadialProgressBar)
.mount('#app')
