<template>
    <div class="bg-white">
        <div>
            <div
                class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8"
            >
                <h2
                    class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"
                >
                    <span class="block">Znižaj stroške</span>
                </h2>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a
                            href="/stroski"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
                        >
                            Poraba
                        </a>
                    </div>
                    <div class="ml-3 inline-flex">
                        <a
                            href="/nizji-stroski"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200"
                        >
                            Znižaj stroške
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300" />
            </div>
        </div>

        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p
                        class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"
                    >
                        Prihrani s finbit-om.
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Glede na to, kako pomembno ti je, da si znižaš stroške,
                        bo finbit prilagodil nasvete, kje in kako lahko
                        prihraniš.
                    </p>
                </div>
            </div>
        </div>
        <div class="app__content">
            <div class="content__radial">
                <GradientProgress
                    :diameter="diameter"
                    :total-steps="totalSteps"
                    :completed-steps="completedSteps"
                    :animate-speed="animateSpeed"
                    :stroke-width="strokeWidth"
                    :inner-stroke-width="innerStrokeWidth"
                    :stroke-linecap="round"
                    :start-color="startColor"
                    :stop-color="stopColor"
                    :inner-stroke-color="innerStrokeColor"
                    :timing-func="timingFunc"
                    :is-clockwise="isClockwise"
                >
                    <div>
                        <small>Šparam: </small>
                        <span>{{ completedSteps }} / {{ totalSteps }}</span>
                    </div>
                </GradientProgress>
                <div class="content__controls">
                    <button
                        :disabled="completedSteps <= 0"
                        @click.prevent="completedSteps--"
                    >
                        Prev
                    </button>
                    <button
                        :disabled="completedSteps >= totalSteps"
                        @click.prevent="completedSteps++"
                    >
                        Next
                    </button>
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
import { defineComponent, ref } from "vue";
import GradientProgress from "vue3-radial-progress";

export default defineComponent({
    data() {
        return {
            completedSteps: 1,
            totalSteps: 3,
            animateSpeed: 1000,
            diameter: 300,
            strokeWidth: 10,
            innerStrokeWidth: 10,
            strokeLinecap: "round",
            startColor: "#00C58E",
            stopColor: "#00E0A1",
            innerStrokeColor: "#2F495E",
            timingFunc: "linear",
            isClockwise: true,
            participants: [
                {
                    id: "user1",
                    name: "AI finbit",
                    imageUrl:
                        "https://www.dropbox.com/s/6ggs6yqmcwcx4i6/finbit-logo.jpeg?raw=1",
                },
            ], // the list of all the participant of the conversation. `name` is the user name, `id` is used to establish the author of a message, `imageUrl` is supposed to be the user avatar.
            titleImageUrl:
                "https://a.slack-edge.com/66f9/img/avatars-teams/ava_0001-34.png",
            messageList: [
                {
                    type: "text",
                    author: `user1`,
                    data: {
                        text: `Živjo Urška, kako ti lahko pomagam?`,
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
        GradientProgress,
    },
    setup() {
        const percentageRef = ref(0);

        const add = () => {
            percentageRef.value += 10;
            if (percentageRef.value > 100) {
                percentageRef.value = 0;
            }
        };

        const minus = () => {
            percentageRef.value -= 10;
            if (percentageRef.value < 0) {
                percentageRef.value = 100;
            }
        };
        return {
            percentage: percentageRef,
            add,
            minus,
        };
    },
});
</script>

<style scoped>
.app__content {
    padding: 1.5rem 2rem;
    border-radius: 7px;
    background: #ffffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: var(--shadow);
}

.content__radial {
    color: black;
}

.content__radial div:first-child {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.content__radial div small {
    font-size: 1.3rem;
    margin-right: 5px;
}

.content__radial div span {
    font-size: 2rem;
}

.content__controls {
    display: flex;
    justify-content: space-around;
    margin: 2rem 0;
}

.content__controls button {
    outline: none;
    border: none;
    padding: 0.4rem 2rem;
    font-size: 1.3rem;
    background: var(--green-2);
    border-radius: 2px;
    color: black;
    cursor: pointer;
    transition: transform ease-in 0.14s;
}

.content__controls button:hover:not(:disabled) {
    transform: scale(1.09);
}

.content__controls button:disabled {
    background: rgb(131, 131, 131);
}
</style>
