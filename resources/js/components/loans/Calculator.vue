<template>
    <div class="items-center text-center">
       AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
        </div>

     
</template>

<script>
import { ref, defineComponent } from "vue";
import { CheckIcon } from "@heroicons/vue/solid";
import { ChevronRightIcon, HomeIcon } from '@heroicons/vue/solid'

export default defineComponent({
    data() {
        return {
          
        };
    },
    components: {
        CheckIcon,
        ChevronRightIcon,
        HomeIcon,
    },
    setup() {

        return {
            
        };
    },
});
</script>

<style scoped>
.radial-progress {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.draw_circle {
    width: 140px;
    height: 140px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    border-radius: 25px;
    background: red;
}
</style>
