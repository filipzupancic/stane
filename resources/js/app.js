require('./bootstrap');

require('alpinejs');

import { createApp, Vue } from "vue";
import RadialProgressBar from "vue3-radial-progress";
import router from './router'
import Welcome from './components/Welcome'

createApp({
    components: {
        Welcome,
    }
})
.use(router)
.use(RadialProgressBar)
.mount('#app')
