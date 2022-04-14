<template>
  <div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
      <div class="text-center radial-progress">
        <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
          Hello, Filip
        </p>
        <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
          Stane ti pomaga pri vsem kar stane.
        </p>

        <div class="py-8">
        <radial-progress-bar :diameter="300" :completed-steps="5" :total-steps="10">
          50%
        </radial-progress-bar>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, defineComponent } from "vue";

export default defineComponent({
  setup() {
    const completedSteps = ref(0);
    const totalSteps = ref(10);

    return {
      completedSteps,
      totalSteps,
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

</style>
