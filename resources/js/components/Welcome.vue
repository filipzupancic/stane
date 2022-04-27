<template>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center radial-progress">
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"
                >
                    Hej, Bobi
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Vzemi kredit.
                </p>

                <div @click="clickedRadialBar" class="pt-8">
                    <component v-for="(component, index) in fields" :key="index" :is="component.comp" v-bind="component.props">
                                                <p
                            class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"
                        >
                            {{component.percentage}}%
                        </p>     
                         </component>
                </div>
            </div>
        </div>

        <beauty-chat></beauty-chat>
    </div>
</template>

<script>
import {shallowRef, ref, defineComponent } from "vue";
import RadialProgressBar from "vue3-radial-progress";
import BeautyChat from "./BeautyChat";
export default defineComponent({
    data() {
        return {
           
        };
    },
    methods: {
       
    },
    components:{
    "beauty-chat":BeautyChat
    },
    setup() {

        var obj={"props":{"diameter":250,
                        "completed-steps":0,
                        "total-steps":10}, "comp":shallowRef(RadialProgressBar),"percentage":0}
        var fields=ref([obj]);
        var curstep=0
        const clickedRadialBar =() =>{
            curstep+=1
            var percentage=Math.round(curstep/10*100)
            var obj={"props":{"diameter":250,
                        "completed-steps":curstep,
                        "total-steps":10}, "comp":shallowRef(RadialProgressBar),"percentage":percentage}
            fields.value.push(obj)
        }
        return {
            clickedRadialBar,
            fields,
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
