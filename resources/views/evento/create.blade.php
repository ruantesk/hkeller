<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div style="background-color:#5e7c12" class="p-6 text-gray-600 dark:text-gray-100">
                    <form method="POST" action="{{ route('evento.store') }}" class="mt-6 space-y-6">
                    @csrf
                    <div style="background-color:#5e7c12;max-width:50%;" class="p-6 text-gray-400 dark:text-gray-100">
                    <a href="{{route('evento.index')}}"><img src="{{ asset('images/voltar.png') }}" style="width:20px;height:20px;" alt="Voltar"></a>
                    <!-- Nome -->
                    <div>
                        <x-input-label class="text-register" for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="nome" name="nome" :value="old('nome')" required autofocus />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                    </div>

                    <!-- E-mail -->
                    <div>
                        <x-input-label class="text-register" for="email" :value="__('E-mail')" />
                        <x-text-input id="email" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Endereço -->
                    <div>
                        <x-input-label class="text-register" for="endereco" :value="__('Endereço')" />
                        <x-text-input id="endereco" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="endereco" name="endereco" :value="old('endereco')" required autofocus />
                        <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
                    </div>

                    <!-- Telefone -->
                    <div>
                        <x-input-label class="text-register" for="telefone" :value="__('Telefone')" />
                        <x-text-input id="telefone" class="telefone border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" type="telefone" name="telefone" :value="old('telefone')" required autofocus />
                        <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
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
