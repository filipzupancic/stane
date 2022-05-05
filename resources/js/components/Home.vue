<template>
    <div>
        <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center radial-progress">
                <p
                    class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl"
                >
                    finbit
                </p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">
                    finance in kredit.
                </p>
            </div>
        </div>

        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300" />
            </div>
        </div>

        <div class="bg-gray-50 pt-12 sm:pt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <p class="mt-3 text-2xl text-gray-900 sm:mt-4">
                        Uživaj življenje in skrb za finance prepusti nam.
                    </p>
                </div>
            </div>
            <div class="mt-10 pb-12 bg-white sm:pb-16">
                <div class="relative">
                    <div class="absolute inset-0 h-1/2 bg-gray-50" />
                    <div
                        class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
                    >
                        <div class="max-w-4xl mx-auto">
                            <dl
                                class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-3"
                            >
                                <div
                                    class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r"
                                >
                                    <n-space vertical>
                                        <n-slider
                                            v-model:value="value"
                                            :marks="stroski"
                                            step="mark"
                                        />
                                    </n-space>
                                    <dd
                                        class="order-1 text-md font-extrabold text-emerald-600 py-4"
                                    >
                                        STROŠKI
                                    </dd>
                                </div>
                                <div
                                    class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r"
                                >
                                    <n-space vertical>
                                        <n-slider
                                            v-model:value="value"
                                            :marks="eko"
                                            step="mark"
                                        />
                                    </n-space>
                                    <dd
                                        class="order-1 text-md font-extrabold text-emerald-600 py-4"
                                    >
                                        EKO
                                    </dd>
                                </div>
                                <div
                                    class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l"
                                >
                                    <n-space vertical>
                                        <n-slider
                                            v-model:value="value"
                                            :marks="invest"
                                            step="mark"
                                        />
                                    </n-space>
                                    <dd
                                        class="order-1 text-md font-extrabold text-emerald-600 py-4"
                                    >
                                        INVESTICIJE
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px"
        >
            <div
                v-for="(action, actionIdx) in actions"
                :key="action.title"
                :class="[
                    actionIdx === 0
                        ? 'rounded-tl-lg rounded-tr-lg sm:rounded-tr-none'
                        : '',
                    actionIdx === 1 ? 'sm:rounded-tr-lg' : '',
                    actionIdx === actions.length - 2 ? 'sm:rounded-bl-lg' : '',
                    actionIdx === actions.length - 1
                        ? 'rounded-bl-lg rounded-br-lg sm:rounded-bl-none'
                        : '',
                    'relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-500',
                ]"
            >
                <div>
                    <span
                        :class="[
                            action.iconBackground,
                            action.iconForeground,
                            'rounded-lg inline-flex p-3 ring-4 ring-white',
                        ]"
                    >
                        <component
                            :is="action.icon"
                            class="h-6 w-6"
                            aria-hidden="true"
                        />
                    </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-lg font-medium">
                        <a :href="action.href" class="focus:outline-none">
                            <!-- Extend touch target to entire panel -->
                            <span class="absolute inset-0" aria-hidden="true" />
                            {{ action.title }}
                        </a>
                    </h3>
                    <p class="mt-2 text-sm text-gray-500">
                        {{ action.content }}
                    </p>
                </div>
                <span
                    class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                    aria-hidden="true"
                >
                    <svg
                        class="h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"
                        />
                    </svg>
                </span>
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
import { NSpace, NSlider } from "naive-ui";
import {
    AcademicCapIcon,
    BadgeCheckIcon,
    CashIcon,
    ClockIcon,
    ReceiptRefundIcon,
    UsersIcon,
    GlobeIcon,
    DocumentTextIcon,
} from "@heroicons/vue/outline";

const actions = [
    {
        title: "Hitro in ugodno do kredita.",
        content:
            "Finbit te pelje čez celoten proces pridobivanja stanovanjskega posojila, od izračuna kreditne sposobnosti in pridobivanja najboljše obrestne mere, do podpisa pogodbe.",
        href: "/kredit",
        icon: ClockIcon,
        iconForeground: "text-teal-700",
        iconBackground: "bg-teal-50",
    },
    {
        title: "Stroški pod nadzorom.",
        content:
            "Beleženje porabe, uporabni nasveti za znižanje in avtomatizirano plačevanje preko aplikacije. Optimiziraj svojo porabo, brez da za to porabiš nekaj ur na teden.",
        href: "/stroski",
        icon: CashIcon,
        iconForeground: "text-rose-700",
        iconBackground: "bg-rose-50",
    },
    {
        title: "Investiraj v prihodnost.",
        content: "Uresniči svoje sanje s pametnimi naložbami.",
        href: "/nalozbe",
        icon: BadgeCheckIcon,
        iconForeground: "text-purple-700",
        iconBackground: "bg-purple-50",
    },
    {
        title: "Eko se splača.",
        content:
            "Skrb za naš planet ni več zgolj dobrodelnost, ampak se dejansko splača. finbit ti pomaga razumeti tvoj ogljični odtis in svetuje, kako ga lahko zmanjšaš in hkrati prihraniš.",
        href: "/eko",
        icon: GlobeIcon,
        iconForeground: "text-emerald-700",
        iconBackground: "bg-emerald-50",
    },
    {
        title: "Digitalna denarnica.",
        content:
            "Finbit ti omogoča, da preprosto povežeš vse bančne račune in digitalno denarnico na enem mestu.",
        href: "/denarnica",
        icon: DocumentTextIcon,
        iconForeground: "text-yellow-700",
        iconBackground: "bg-yellow-50",
    },
    {
        title: "Osebni svetovalec vedno pri roki",
        content:
            "Finbit je vedno na voljo za vprašanja na temo financ, lahko pa te tudi hitro poveže z bančnih uslužbencem.",
        href: "/obvestila",
        icon: UsersIcon,
        iconForeground: "text-sky-700",
        iconBackground: "bg-sky-50",
    },
];

export default defineComponent({
    data() {
        return {
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
        NSpace,
        NSlider,
    },
    setup() {
        const completedSteps = ref(0);
        const totalSteps = ref(10);

        return {
            completedSteps,
            totalSteps,
            actions,
            refstroski: ref(0),
            refeko: ref(0),
            refinvest: ref(0),
            stroski: {
                0: "ne šparam",
                50: "neki vmes",
                100: "ful šparam",
            },
            eko: {
                0: "don't care",
                50: "neki vmes",
                100: "eko frik",
            },
            invest: {
                0: "safe side",
                50: "neki vmes",
                100: "risky",
            },
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
