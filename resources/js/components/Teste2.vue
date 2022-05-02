<template>
    <div class="bg-white">
       BBBBBBBBBBBBBBBBBBBBBBBB
    </div>
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    data() {
        return {
        
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
