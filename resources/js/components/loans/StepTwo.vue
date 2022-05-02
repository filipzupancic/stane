<template>
    <div class="items-center text-center">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div>
                <nav class="flex items-center place-content-center pt-4 pb-8" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center place-content-center space-x-4">
                    <li>
                        <div>
                        <a href="/" class="text-gray-400 hover:text-gray-500">
                            <HomeIcon class="flex-shrink-0 h-5 w-5" aria-hidden="true" />
                            <span class="sr-only">Home</span>
                        </a>
                        </div>
                    </li>
                    <li v-for="page in pages" :key="page.name">
                        <div class="flex items-center">
                        <ChevronRightIcon class="flex-shrink-0 h-5 w-5 text-gray-400" aria-hidden="true" />
                        <a :href="page.href" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" :aria-current="page.current ? 'page' : undefined">{{ page.name }}</a>
                        </div>
                    </li>
                    </ol>
                </nav>
                <nav aria-label="Progress">
                    <ol role="list" class="flex items-center place-content-center">
                        <li
                            v-for="(step, stepIdx) in steps"
                            :key="step.name"
                            :class="[
                                stepIdx !== steps.length - 1
                                    ? 'pr-8 sm:pr-20'
                                    : '',
                                'relative',
                            ]"
                        >
                            <template v-if="step.status === 'complete'">
                                <div
                                    class="absolute inset-0 flex items-center"
                                    aria-hidden="true"
                                >
                                    <div class="h-0.5 w-full bg-emerald-600" />
                                </div>
                                <a
                                    :href="step.href"
                                    class="relative w-8 h-8 flex items-center justify-center bg-emerald-600 rounded-full hover:bg-emerald-900"
                                >
                                    <CheckIcon
                                        class="w-5 h-5 text-white"
                                        aria-hidden="true"
                                    />
                                    <span class="sr-only">{{ step.name }}</span>
                                </a>
                            </template>
                            <template
                                v-else-if="step.status === 'current'"
                                condition="step.status === 'current'"
                            >
                                <div
                                    class="absolute inset-0 flex items-center"
                                    aria-hidden="true"
                                >
                                    <div class="h-0.5 w-full bg-gray-200" />
                                </div>
                                <a
                                    :href="step.href"
                                    class="relative w-8 h-8 flex items-center justify-center bg-white border-2 border-emerald-600 rounded-full"
                                    aria-current="step"
                                >
                                    <span
                                        class="h-2.5 w-2.5 bg-emerald-600 rounded-full"
                                        aria-hidden="true"
                                    />
                                    <span class="sr-only">{{ step.name }}</span>
                                </a>
                            </template>
                            <template v-else>
                                <div
                                    class="absolute inset-0 flex items-center"
                                    aria-hidden="true"
                                >
                                    <div class="h-0.5 w-full bg-gray-200" />
                                </div>
                                <a
                                    :href="step.href"
                                    class="group relative w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full hover:border-gray-400"
                                >
                                    <span
                                        class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"
                                        aria-hidden="true"
                                    />
                                    <span class="sr-only">{{ step.name }}</span>
                                </a>
                            </template>
                        </li>
                    </ol>
                </nav>
                <div class="bg-white">
                    <div
                        class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8"
                    >
                        <div class="text-center">
                            <h2
                                class="text-base font-semibold text-gray-900 tracking-wide uppercase"
                            >
                                PRIDOBI PRIMERLJIVE PONUDBE
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <beautiful-chat
            :participants="participants"
            :titleImageUrl="titleImageUrl"
            :onMessageWasSent="onMessageWasSent"
            :messageList="messageList"
            :newMessagesCount="newMessagesCount"
            :isOpen="isChatOpen"
            :close="closeChat"
            :icons="icons"
            :open="openChat"
            :showEmoji="true"
            :showFile="true"
            :showEdition="true"
            :showDeletion="true"
            :deletionConfirmation="true"
            :showTypingIndicator="showTypingIndicator"
            :showLauncher="true"
            :showCloseButton="true"
            :colors="colors"
            :alwaysScrollToBottom="alwaysScrollToBottom"
            :disableUserListToggle="false"
            :messageStyling="messageStyling"
            @onType="handleOnType"
            @edit="editMessage"
        />
    </div>
</template>

<script>
import { ref, defineComponent } from "vue";
import { CheckIcon } from "@heroicons/vue/solid";
import { ChevronRightIcon, HomeIcon } from '@heroicons/vue/solid'

const pages = [
  { name: 'kredit', href: '/kredit', current: false },
  { name: 'drugi korak', href: '/kredit/drugi-korak', current: true },
];

const steps = [
    { name: "Step 1", href: "/kredit/prvi-korak", status: "complete" },
    { name: "Step 2", href: "/kredit/drugi-korak", status: "current" },
    { name: "Step 3", href: "/kredit/tretji-korak", status: "upcoming" },
    { name: "Step 4", href: "/kredit/cetrti-korak", status: "upcoming" },
    { name: "Step 5", href: "/kredit/peti-korak", status: "upcoming" },
];

export default defineComponent({
    data() {
        return {
            participants: [
                {
                    id: "user1",
                    name: "AI Stane",
                    imageUrl:
                        "https://www.dropbox.com/s/6ggs6yqmcwcx4i6/stane-logo.jpeg?raw=1",
                },
            ], // the list of all the participant of the conversation. `name` is the user name, `id` is used to establish the author of a message, `imageUrl` is supposed to be the user avatar.
            titleImageUrl:
                "https://a.slack-edge.com/66f9/img/avatars-teams/ava_0001-34.png",
            messageList: [
                {
                    type: "text",
                    author: `user1`,
                    data: {
                        text: `Hej Mojca, kako ti lahko pomagam?`,
                    },
                },
                {
                    type: "text",
                    author: `me`,
                    data: {
                        text: `Živjo, potrebujem pomoč pri pridobivanju ponudb za stanovanjska posojila.`,
                    },
                },
                {
                    type: "text",
                    author: `user1`,
                    data: {
                        text: `Ni problema, tvoje zanimanje bomo posredovali izbranim bankam in v kratkem boš dobila odgovor.`,
                    },
                },
            ], // the list of the messages to show, can be paginated and adjusted dynamically
            newMessagesCount: 0,
            isChatOpen: false, // to determine whether the chat window should be open or closed
            showTypingIndicator: "", // when set to a value matching the participant.id it shows the typing indicator for the specific user
            colors: {
                header: {
                    bg: "#4e8cff",
                    text: "#ffffff",
                },
                launcher: {
                    bg: "#4e8cff",
                },
                messageList: {
                    bg: "#ffffff",
                },
                sentMessage: {
                    bg: "#4e8cff",
                    text: "#ffffff",
                },
                receivedMessage: {
                    bg: "#eaeaea",
                    text: "#222222",
                },
                userInput: {
                    bg: "#f4f7f9",
                    text: "#565867",
                },
            }, // specifies the color scheme for the component
            alwaysScrollToBottom: false, // when set to true always scrolls the chat to the bottom when new events are in (new message, user starts typing...)
            messageStyling: true, // enables *bold* /emph/ _underline_ and such (more info at github.com/mattezza/msgdown)
            percentage: 50,
        };
    },
    methods: {
        sendMessage(text) {
            if (text.length > 0) {
                this.newMessagesCount = this.isChatOpen
                    ? this.newMessagesCount
                    : this.newMessagesCount + 1;
                this.onMessageWasSent({
                    author: "kipo",
                    type: "text",
                    data: { text },
                });
            }
        },
        onMessageWasSent(message) {
            // called when the user sends a message
            this.messageList = [...this.messageList, message];
        },
        openChat() {
            // called when the user clicks on the fab button to open the chat
            this.isChatOpen = true;
            this.newMessagesCount = 0;
        },
        closeChat() {
            // called when the user clicks on the botton to close the chat
            this.isChatOpen = false;
        },
        handleScrollToTop() {
            // called when the user scrolls message list to top
            // leverage pagination for loading another page of messages
        },
        handleOnType() {
            console.log("Emit typing event");
        },
        editMessage(message) {
            const m = this.messageList.find((m) => m.id === message.id);
            m.isEdited = true;
            m.data.text = message.data.text;
        },
    },
    components: {
        CheckIcon,
        ChevronRightIcon,
        HomeIcon,
    },
    setup() {
        const completedSteps = ref(0);
        const totalSteps = ref(10);

        return {
            completedSteps,
            totalSteps,
            steps,
            pages,
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
