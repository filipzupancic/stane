<template>
    <div class="bg-white">
        <div>
            <div
                class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8"
            >
                <h2
                    class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"
                >
                    <span class="block">Tvoji stroški</span>
                </h2>
            </div>
        </div>
        <!-- Actions panel -->
        <section aria-labelledby="quick-links-title">
            <div
                class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px"
            >
                <div class="cost-graph mt-8 flex justify-center">
                    <div class="main-container">
                        <div class="year-stats">
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Jan</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Feb</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Mar</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Apr</p>
                            </div>
                            <div class="month-group selected">
                                <div class="bar h-100"></div>
                                <p class="month">May</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Jun</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Jul</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Aug</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-50"></div>
                                <p class="month">Sep</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-75"></div>
                                <p class="month">Oct</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-25"></div>
                                <p class="month">Nov</p>
                            </div>
                            <div class="month-group">
                                <div class="bar h-100"></div>
                                <p class="month">Dez</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cost-graph mt-8 flex justify-center">
                    <div class="main-container">
                        <div class="stats-info">
                            <div class="graph-container">
                                <div class="percent">
                                    <svg
                                        viewBox="0 0 36 36"
                                        class="circular-chart"
                                    >
                                        <path
                                            class="circle"
                                            stroke-dasharray="100, 100"
                                            d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
                                        />
                                        <path
                                            class="circle"
                                            stroke-dasharray="85, 100"
                                            d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
                                        />
                                        <path
                                            class="circle"
                                            stroke-dasharray="60, 100"
                                            d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
                                        />
                                        <path
                                            class="circle"
                                            stroke-dasharray="30, 100"
                                            d="M18 2.0845
      a 15.9155 15.9155 0 0 1 0 31.831
      a 15.9155 15.9155 0 0 1 0 -31.831"
                                        />
                                    </svg>
                                </div>
                                <p>Skupaj: €2075</p>
                            </div>

                            <div class="info">
                                <p>Največji strošek: <span>živila</span></p>
                                <p>Nižja poraba: <span>avto</span></p>
                                <p>Prihranek: <span>€92</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
import { defineComponent } from "vue";

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
    setup() {
        return {};
    },
});
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap");

.cost-graph {
    font-family: "Roboto", sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.main-container {
    background: #dbeafe;
    color: #3b82f6;
    border-radius: 5px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 50px;
    padding-bottom: 50px;
    width: 100%;
    height: 100%;
    box-sizing: border-box;
}

.year-stats {
    white-space: nowrap;
    max-height: 170px;
    overflow: hidden;
}

.year-stats:hover {
    overflow-x: auto;
}

/* SCROLL BAR STYLE (ONLY WORKS IN CHROME) */
/* Width */
::-webkit-scrollbar {
    height: 5px;
    width: 100%;
}

/* Track */
::-webkit-scrollbar-track {
    background: #dbeafe;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #3b82f6;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    background: #1e3a8a;
}

.month-group {
    cursor: pointer;
    max-width: 400px;
    height: 110px;
    margin: 10px;
    display: inline-block;
}

.bar {
    background-color: #3b82f6;
    width: 20px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.month-group:hover .bar,
.selected .bar {
    background: #1e3a8a;
}

.month-group:hover p,
.selected p {
    color: #1e3a8a;
}

.h-25 {
    height: 25%;
}
.h-50 {
    height: 50%;
}
.h-75 {
    height: 75%;
}
.h-100 {
    height: 100%;
}

.stats-info {
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
}

.graph-container {
    position: relative;
}

.percent {
    display: block;
    width: 120px;
    height: 120px;
}

.circle {
    stroke: #915db1;
    fill: none;
    stroke-width: 3;
}

.circle:nth-child(2) {
    stroke: #e59f3c;
}

.circle:nth-child(3) {
    stroke: #5397d6;
}

.circle:nth-child(4) {
    stroke: #4cc790;
}

.graph-container p {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    color: #1e3a8a;
    text-align: center;
}

.info p {
    margin-bottom: 10px;
}

.info span {
    color: #1e3a8a;
}
</style>
