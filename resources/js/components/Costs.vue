<template>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center radial-progress">
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"
                >
                    Živjo, Aleksander
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Tvoji stroški.
                </p>
            </div>
        </div>
        <beauty-chat></beauty-chat>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import BeautyChat from './BeautyChat'
export default defineComponent({
    data() {
        return {}
    },
    methods: {
    },
    setup() {
        return {};
    },
    components: {
    'beauty-chat': BeautyChat
    }
});
</script>
