require('./bootstrap');

require('alpinejs');

import { createApp, Vue } from "vue";
import RadialProgressBar from "vue3-radial-progress";
import router from './router'
import Welcome from './components/Welcome'
import Costs from './components/Costs'
import Co2 from './components/Co2'
import Investments from './components/Investments'


createApp({
    components: {
        Welcome,
        Costs,
        Co2, 
        Investments
    }
})
.use(router)
.use(RadialProgressBar)
.mount('#app')
