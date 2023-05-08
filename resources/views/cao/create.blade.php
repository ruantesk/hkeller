<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div style="background-color:#5e7c12" class="p-6 text-gray-600 dark:text-gray-100">
                    <form method="POST" action="{{ route('cao.store') }}" class="mt-6 space-y-6">
                    @csrf
                    <div style="background-color:#5e7c12;max-width:50%;" class="p-6 text-gray-400 dark:text-gray-100">
                    <a href="{{route('cao.index')}}"><img src="{{ asset('images/voltar.png') }}" style="width:20px;height:20px;" alt="Voltar"></a>
                    <!-- Nome -->
                    <div>
                        <x-input-label class="text-register" for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="nome" name="nome" :value="old('nome')" required autofocus />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                    </div>

                    <!-- Raca -->
                    <div>
                        <x-input-label class="text-register" for="raca" :value="__('Raca')" />
                        <x-text-input id="raca" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="raca" name="raca" :value="old('raca')" required autofocus />
                        <x-input-error :messages="$errors->get('raca')" class="mt-2" />
                    </div>

                    <!-- Cor -->
                    <div>
                        <x-input-label class="text-register" for="cor" :value="__('Cor')" />
                        <x-text-input id="cor" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="cor" name="cor" :value="old('cor')" required autofocus />
                        <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                    </div>

                    <!-- Porte -->
                    <div>
                        <x-input-label class="text-register" for="porte" :value="__('Porte')" />
                        <x-text-input id="porte" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="porte" name="porte" :value="old('porte')" required autofocus />
                        <x-input-error :messages="$errors->get('porte')" class="mt-2" />
                    </div>

                    <!-- Nascimento -->
                    <div>
                        <x-input-label class="text-register" for="data_nascimento" :value="__('Data de nascimento')" />
                        <x-text-input id="data_nascimento" class="date border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="data_nascimento" name="data_nascimento" :value="old('data_nascimento')" required autofocus />
                        <x-input-error :messages="$errors->get('data_nascimento')" class="mt-2" />
                    </div>
                    <BR>
                    <div>
                        <x-primary-button class="ml-3">
                            {{ __('Cadastrar') }}
                        </x-primary-button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
