<template>
    <div>

                  <radial-progress-bar  v-on:click="clickedRadialBar"
                        :diameter="500"
                        :completed-steps="currentComponentIndex"
                        :total-steps="stepsLength"
                    >
                    <keep-alive>
                    <component v-bind:is="currentComponent" />
                    </keep-alive>
                    </radial-progress-bar>
    </div>
</template>

<script>
import {shallowRef, reactive,ref, defineComponent } from "vue";
import RadialProgressBar from "vue3-radial-progress";
export default defineComponent({
    data() {
        return {
           
        };
    },
    methods: {
       
    },
    components:{
  
    },
    props: {
    comps: Object
    },
    setup(props) {

        var allcomponents=props.comps.allcomps;
        var currentComponentIndex=ref(0);
        var currentComponent=allcomponents[currentComponentIndex.value]
        var stepsLength=allcomponents.length;
        const clickedRadialBar =() =>{
        currentComponentIndex.value+=1;
        currentComponent=allcomponents[currentComponentIndex.value]
        console.log("aa")
        console.log(currentComponent)

        }
        return {
            clickedRadialBar,
            stepsLength,
            currentComponentIndex,
            currentComponent,
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
