<template>
    <div class="bg-white">
        <div>
            <div
                class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8"
            >
                <h2
                    class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"
                >
                    <span class="block">Zmanjšaj svoj ogljični odtis</span>
                </h2>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a
                            href="/eko"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700"
                        >
                            Ogljični odtis
                        </a>
                    </div>
                    <div class="ml-3 inline-flex">
                        <a
                            href="/eko-akcija"
                            class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-emerald-700 bg-emerald-100 hover:bg-emerald-200"
                        >
                            Stopi v akcijo
                        </a>
                    </div>
                </div>
            </div>

            <!--
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <vue-flip active-click="" class="relative bg-white py-5 px-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden center" align-items="center" justify-content="center">
                    <template v-slot:front >
                       <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">DONIRAJ</p>
                        </dd>
                    </template>
                    <template v-slot:back align-items="center" justify-content="center">
                        <p class="text-2xl font-semibold text-gray-900">Organizacije:
                        </p>
                    </template>
                </vue-flip>
                <vue-flip active-click="" class="relative bg-white py-5 px-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden center">
                    <template v-slot:front align-items="center" justify-content="center">
                       Doniraj1
                    </template>
                    <template v-slot:back align-items="center" justify-content="center">
                        Opcije doniranja
                    </template>
                </vue-flip>
                <vue-flip active-click="" class="relative bg-white py-5 px-4 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden center">
                    <template v-slot:front align-items="center" justify-content="center">
                       Doniraj2
                    </template>
                    <template v-slot:back align-items="center" justify-content="center">
                        Opcije doniranja
                    </template>
                </vue-flip>
            </dl>
            -->

        </div>

        <div class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <section class="section-tours">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="my-flip-container">
                        <div class="my-flip-inner my-flip-right">
                            <div class="my-flip-inner-wrapper">
                                <div class="my-flip-side my-flip-front">
                                    <div class="my-flip-image my-flip-image--1">
                                    <img src="https://therichpost.com/wp-content/uploads/2021/04/flip-1.jpg">                                 
                                    </div>
                                    <div class="my-flip-details">
                                    <h4 class="my-flip-heading">Eko mesečni izziv</h4>
                                    <div class="my-flip-text">
                                        <p>Na drugi strani kartice imaš predlaganih 5 izzivo, ki jih lahko opraviš v naslednjem mesecu in na ta način zmanjšaš svoj ogličnji odtis. Pa veliko sreče pri opravljanju.</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="my-flip-side my-flip-back my-flip-back-1">
                                    <div class="my-flip-back-inner">
                                    <div class="my-flip-price">
                                        <h3>Izzivi</h3>
                                    </div>
                                    <div class="my-flip-back-text">
                                        <ul>
                                            <li>En mesec brez mesa</li>
                                            <li>2x na teden grem v službo s kolesom</li>
                                            <li>En mesec bom v trgovini uporabljal le svoje vrečke</li>
                                            <li>Ugašal bom luči, ko le teh ne potrebujem</li>
                                            <li>Postavil bom svojo sončno elektrarno</li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="my-flip-container">
                        <div class="my-flip-inner my-flip-right">
                            <div class="my-flip-inner-wrapper">
                                <div class="my-flip-side my-flip-front">
                                    <div class="my-flip-image my-flip-image--2">
                                    <img src="https://therichpost.com/wp-content/uploads/2021/04/flip-2.jpg">                
                                    </div>
                                    <div class="my-flip-details">
                                    <h4 class="my-flip-heading">Doniraj</h4>
                                    <div class="my-flip-text">
                                        <p>Na tej kartici imaš predlagana društva, katerim z donacijo zmanjšaš svoj ogličnji odtis</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="my-flip-side my-flip-back my-flip-back-2">
                                    <div class="my-flip-back-inner">
                                    <div class="my-flip-price">
                                        <h3>Donacije</h3>
                                    </div>
                                    <div class="my-flip-back-text">
                                        <ul>
                                            <li>Posadi drevo</li>
                                            <li>Očisti plažo</li>
                                            <li>Očisti ocean</li>
                                            <li>Zasadi gozd</li>
                                            <li>Posadi medene rastline</li>
                                        </ul>
                                    </div>
                                    <!--<div class="my-flip-btn-box"><a href="#0" class="my-flip-btn">Book Now</a></div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
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
import { defineComponent } from "vue";
import VueFlip from 'vue-flip';

export default defineComponent({
    components: {
        'vue-flip': VueFlip,
    },
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
                        text: `Živjo Kipo, kako ti lahko pomagam?`,
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
        handleClick() {
            this.model2 = true;
        },
    },
    setup() {
        return {};
    },
});
</script>

<style scoped>
a:hover{
    text-decoration: none;
}
 
.my-flip-inner-wrapper {
    perspective: 150rem;
    -moz-perspective: 150rem;
    position: relative;   
}
.my-flip-side {
    display: block;
    height: 500px;
    top: 0;
    right: 0;
    left: 0;
    box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);    
    transition: all .8s ease;    
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;   
}
 
.my-flip-back {
    transform: rotateY(180deg);
    color: #fff;
    position: absolute;
    z-index: -1;
    box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.15);
    padding: 46px;   
}
 
.my-flip-back-1 {
    background: linear-gradient(to right bottom, #ffb900, #ff7730);
}
 
.my-flip-back-2 {
    background: linear-gradient(to right bottom, #000428, #004e92);
}
 
.my-flip-back-3 {
    background: linear-gradient(to right bottom, #2998ff, #5643fa);
}
 
.my-flip-inner-wrapper:hover .my-flip-front {
    transform: rotateY(-180deg);
}
 
.my-flip-inner-wrapper:hover .my-flip-back {
    transform: rotateY(0);
}
.my-flip-image {
    height: 15rem;
    background-blend-mode: screen;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}
.my-flip-image img{
    width: 100%;
    height: 100%;
    background-blend-mode: screen;
    object-fit: cover;   
}
.my-flip-heading {
    margin: 0 0 15px;
}
.my-flip-details {
    padding: 2rem;
}
.my-flip-details p {
    font-size: 15px;
    margin: 0;
    line-height: 2;
    color: #848484;
}
.my-flip-back-inner ul {
    list-style: none;  
    margin: 0 0 1.5rem;
    padding: 0;
}
.my-flip-back-text  ul li {
    text-align: center;
    color:#fff;
    font-size: 1rem;
    padding: 0.8rem 0;
}
.my-flip-back-inner ul li:not(:last-child) {
    border-bottom: 1px solid #ffffff;
}
.my-flip-price {
    color: #fff;
    text-align: center;
    margin-bottom: 1rem;
}
.my-flip-price h3 {
    font-size: 3rem;
    font-weight: 300;
}
.my-flip-btn-box {
    text-align: center;
}
.my-flip-btn{
    text-transform: uppercase;
    padding: 1rem 1.8rem;
    font-size: 1rem;
    background-color: #fff;
    color: #000;
    border-radius: 10rem;
    display: inline-block;
    transition: all .2s;
    color: initial;
    position: relative;
}
.my-flip-btn:hover {
    transform: translateY(-4px);
    box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    color: #000;
}
</style>
