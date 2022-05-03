<template>
    <div>
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center radial-progress">
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"
                >
                    Hej, Petra.
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Tvoja digitalna denarnica.
                </p>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a
                            href="/denarnica"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700"
                        >
                            Denarnica
                        </a>
                    </div>
                    <div class="ml-3 inline-flex">
                        <a
                            href="/dokumenti"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200"
                        >
                            Dokumenti
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-md mx-auto sm:max-w-3xl">
            <div>
                <div class="text-center">
                    <svg
                        class="mx-auto h-12 w-12 text-gray-400"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 48 48"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
                        ></path>
                    </svg>
                    <h2 class="mt-2 text-lg font-medium text-gray-900">
                        Dodaj račun
                    </h2>
                    <p class="mt-1 text-sm text-gray-500">
                        Poveži vse bančne račune na enem mestu
                    </p>
                </div>
                <form class="mt-6 sm:flex sm:items-center" action="#">
                    <label for="emails" class="sr-only"
                        >Banke in denarnice</label
                    >
                    <div
                        class="relative rounded-md shadow-sm sm:min-w-0 sm:flex-1"
                    >
                        <input
                            type="text"
                            name="emails"
                            id="emails"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-32 sm:text-sm border-gray-300 rounded-md"
                            placeholder="Enter an email"
                        />
                        <div
                            class="absolute inset-y-0 right-0 flex items-center"
                        >
                            <span
                                class="h-4 w-px bg-gray-200"
                                aria-hidden="true"
                            />
                            <label for="role" class="sr-only">Tip</label>
                            <select
                                id="role"
                                name="role"
                                class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-4 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md"
                            >
                                <option>Banke</option>
                                <option>Denarnice</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-4 sm:flex-shrink-0">
                        <button
                            type="submit"
                            class="block w-full text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Poveži
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-10">
                <h3
                    class="text-xs font-semibold text-gray-500 uppercase tracking-wide"
                >
                    Poišči banko na seznamu
                </h3>
                <ul
                    role="list"
                    class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2"
                >
                    <li v-for="(bank, bankIdx) in banks" :key="bankIdx">
                        <button
                            type="button"
                            class="group p-2 w-full flex items-center justify-between rounded-full border border-gray-300 shadow-sm space-x-3 text-left hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            <span
                                class="min-w-0 flex-1 flex items-center space-x-3"
                            >
                                <span class="block flex-shrink-0">
                                    <img
                                        class="h-10 w-10 rounded-full"
                                        :src="bank.imageUrl"
                                        alt=""
                                    />
                                </span>
                                <span class="block min-w-0 flex-1">
                                    <span
                                        class="block text-sm font-medium text-gray-900 truncate"
                                        >{{ bank.name }}</span
                                    >
                                </span>
                            </span>
                            <span
                                class="flex-shrink-0 h-10 w-10 inline-flex items-center justify-center"
                            >
                                <PlusIcon
                                    class="h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                    aria-hidden="true"
                                />
                            </span>
                        </button>
                    </li>
                </ul>
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
import { defineComponent, onMounted } from "vue";
import { PlusIcon } from "@heroicons/vue/solid";

const banks = [
    {
        name: "Sparkasse",
        role: "",
        imageUrl:
            "https://www.dropbox.com/s/l2trkicqi2dcbni/Sparkasse.svg.png?raw=1",
    },
    {
        name: "NLB",
        role: "",
        imageUrl: "https://www.dropbox.com/s/wnyq1w31ayk6ss1/nlb.jpg?raw=1",
    },
    {
        name: "Revolut",
        role: "",
        imageUrl: "https://www.dropbox.com/s/eggdikc7lv37mqt/r.png?raw=1",
    },
    {
        name: "N26",
        role: "",
        imageUrl:
            "https://www.dropbox.com/s/1ygazhfofd7s3vk/n26-logo.png?raw=1",
    },
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
                        text: `Živjo Bogdan, kako ti lahko pomagam?`,
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
                        text: `Ni problema, tvoje zanimanje bomo posredovali izbranim bankam in v kratkem boš dobil odgovor.`,
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
        PlusIcon,
    },
    setup() {
        return {
            banks,
        };
    },
});
</script>
