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
                    Tvoji dokumenti.
                </p>
            </div>
        </div>
        <div
            class="overflow-hidden overflow-x-auto min-w-full align-middle sm:rounded-md"
        >
            <div class="flex place-content-center mb-4">
                <div
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    <router-link
                        :to="{ name: 'documents.create' }"
                        class="text-sm font-medium"
                        >Dodaj dokument</router-link
                    >
                </div>
            </div>
            <ul
                role="list"
                class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4"
            >
                <template v-for="item in documents" :key="item.id">
                    <li class="col-span-1 flex shadow-sm rounded-md">
                        <div
                            class="flex-shrink-0 flex items-center justify-center w-16 bg-emerald-600 text-white text-sm font-medium rounded-l-md"
                        >
                            PDF
                        </div>
                        <div
                            class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate"
                        >
                            <div class="flex-1 px-4 py-2 text-sm truncate">
                                <a
                                    href="#"
                                    class="text-gray-900 font-medium hover:text-gray-600"
                                    >{{ item.name }}</a
                                >
                                <p class="text-gray-500">Added: May 2022</p>
                            </div>
                            <div class="flex-shrink-0 pr-2">
                                <button
                                    type="button"
                                    class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                >
                                    <span class="sr-only">Open options</span>
                                    <!-- Heroicon name: solid/dots-vertical -->
                                    <svg
                                        class="w-5 h-5"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </li>
                </template>
            </ul>
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
import useDocuments from "../composables/documents";
import { defineComponent, onMounted } from "vue";

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
    setup() {
        const { documents, getDocuments, deleteDocument } = useDocuments();
        onMounted(getDocuments);
        const deleteTheDocument = async (id) => {
            if (!window.confirm("Are you sure?")) {
                return;
            }
            await deleteDocument(id);
            await getDocuments();
        };
        return {
            documents,
            deleteTheDocument,
        };
    },
});
</script>
