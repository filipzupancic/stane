<!-- This example requires Tailwind CSS v2.0+ -->

<header class="bg-white shadow">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 shadow" aria-label="Top">
        <div class="w-full py-6 flex items-center justify-between border-b border-grey-500 lg:border-none">
            <div class="flex items-center">
                <a href="/">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                </a>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="/kredit" class="font-medium text-gray-500 hover:text-indigo-900 hover:bg-indigo-50">KREDIT</a>
                </div>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="/stroski" class="font-medium text-gray-500 hover:text-gray-900">STROŠKI</a>
                </div>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="/eko" class="font-medium text-gray-500 hover:text-gray-900">EKO</a>
                </div>
                <div class="hidden ml-10 space-x-8 lg:block">
                    <a href="/nalozbe" class="font-medium text-gray-500 hover:text-gray-900">NALOŽBE</a>
                </div>
            </div>
            @guest
            <div class="flex-1 flex items-center justify-end">
                <div class="flex items-center lg:ml-8">
                    <div class="flex space-x-8">
                        <div class="flex">
                            <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Documents</span>
                                <!-- Heroicon name: outline/search -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex">
                            <a href="#" class="-m-2 p-2">
                                <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span class="sr-only">View notifications</span>
                                    <!-- Heroicon name: outline/bell -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>

                    <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>
                </div>
            </div>
            <div class="ml-10 space-x-4">
                <a href="/login" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
                <a href="/register" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign up</a>
            </div>
            @endguest
            @auth
            <div class="ml-10 space-x-4">
                <a href="/profil" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">{{ Auth::user()->name }}</a>
                <form class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link class="antialiased text-base font-medium text-indigo-600 hover:bg-indigo-50" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-nav-link>
                </form>
            </div>
            @endauth
        </div>
        <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
            <a href="/kredit" class="text-base font-medium text-gray-500 hover:text-gray-900"> KREDIT </a>
            <a href="/stroski" class="text-base font-medium text-gray-500 hover:text-gray-900"> STROŠKI </a>
            <a href="/eko" class="text-base font-medium text-gray-500 hover:text-gray-900"> EKO </a>
            <a href="/nalozbe" class="text-base font-medium text-gray-500 hover:text-gray-900"> NALOŽBE </a>
        </div>
    </nav>
</header>