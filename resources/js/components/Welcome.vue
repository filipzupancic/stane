<template>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center radial-progress">
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"
                >
                    Hej, Živa
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    Ugodno in preprosto do kredita.
                </p>

                <div class="flow-root pt-16">
                    <ul role="list" class="-mb-8">
                        <li
                            v-for="(event, eventIdx) in timeline"
                            :key="event.id"
                        >
                            <div class="relative pb-8">
                                <span
                                    v-if="eventIdx !== timeline.length - 1"
                                    class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                    aria-hidden="true"
                                />
                                <div class="relative flex space-x-3">
                                    <div>
                                        <span
                                            :class="[
                                                event.iconBackground,
                                                'h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-white',
                                            ]"
                                        >
                                            <component
                                                :is="event.icon"
                                                class="h-5 w-5 text-white"
                                                aria-hidden="true"
                                            />
                                        </span>
                                    </div>
                                    <div
                                        class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4"
                                    >
                                        <div>
                                            <p class="text-sm text-gray-500">
                                                {{ event.content }}
                                                <a
                                                    :href="event.href"
                                                    class="font-medium text-gray-900"
                                                    >{{ event.target }}</a
                                                >
                                            </p>
                                        </div>
                                        <div
                                            class="text-right text-sm whitespace-nowrap text-gray-500"
                                        >
                                            <time :datetime="event.datetime">{{
                                                event.date
                                            }}</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
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
import { CheckIcon, ThumbUpIcon, UserIcon } from "@heroicons/vue/solid";

const timeline = [
    {
        id: 1,
        content: "Pridobi ugodno obrestno mero.",
        target: "",
        href: "/",
        date: "2 dni",
        datetime: "2020-09-20",
        icon: UserIcon,
        iconBackground: "bg-gray-400",
    },
    {
        id: 2,
        content: "Zberi in oddaj dokumente",
        target: "",
        href: "/",
        date: "14 dni",
        datetime: "2020-09-22",
        icon: ThumbUpIcon,
        iconBackground: "bg-blue-500",
    },
    {
        id: 3,
        content: "Podpiši pogodbo",
        target: "",
        href: "/",
        date: "1 dan",
        datetime: "2020-09-28",
        icon: CheckIcon,
        iconBackground: "bg-green-500",
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
                        text: `Hej Živa, kako ti lahko pomagam?`,
                    },
                },
                {
                    type: "text",
                    author: `me`,
                    data: { text: `Živjo, potrebujem pomoč pri pridobivanju ponudb za stanovanjska posojila.` },
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
    setup() {
        const completedSteps = ref(0);
        const totalSteps = ref(10);

        return {
            completedSteps,
            totalSteps,
            timeline,
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
