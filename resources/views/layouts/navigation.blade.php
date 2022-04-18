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
                    <a href="/kredit" class="font-medium text-gray-500 hover:text-gray-900">KREDIT</a>
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
            <a href="/kredit" class="text-base font-medium text-gray-500 hover:text-gray-50"> KREDIT </a>
            <a href="/stroski" class="text-base font-medium text-gray-500 hover:text-gray-50"> STROŠKI </a>
            <a href="/eko" class="text-base font-medium text-gray-500 hover:text-gray-50"> EKO </a>
            <a href="/nalozbe" class="text-base font-medium text-gray-500 hover:text-gray-50"> NALOŽBE </a>
        </div>
    </nav>
</header>