<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-register leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#94C21C" class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Você está logado!") }} <BR><BR>
                    <a href="{{ __('tutores/') }}">{{ __("Tutores") }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
