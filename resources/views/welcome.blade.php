@include('layouts.navigation')
<x-app-layout>
    <x-slot name="header">
        <router-view />
    </x-slot>

</x-app-layout>
@include('layouts.footer')