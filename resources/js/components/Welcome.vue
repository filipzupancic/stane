<template>
  <div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
      <div class="text-center">
        <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Hello Filip</p>
        <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Your real-estate loan is just around the corner.</p>
      </div>
    </div>
    <radial-progress-bar :diameter="200" :completed-steps="completedSteps" :total-steps="totalSteps">
      <!-- Your inner content here -->
    </radial-progress-bar>
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
      totalSteps
    }
  }
})
</script>
