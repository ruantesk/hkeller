<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#5e7c12" class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex space-x-4">
                        <a href="{{ route('evento.index') }}"><img src="{{ asset('images/voltar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Voltar"></a>
                        <a href="{{ route('evento.edit', $evento->id) }}"><img src="{{ asset('images/editar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Editar"></a>
                    </div>
                    <form method="GET" action="{{ route('evento.edit', $evento->id) }}" class="mt-6 space-y-6">
                    <!-- Nome -->
                    <div>
                        <x-input-label class="text-register" for="nome" :value="__('Nome')" />
                        <x-input-label class="text-register"  for="nome" :value=" $evento->nome " />
                    </div>

                    <!-- E-mail -->
                    <div>
                        <x-input-label class="text-register" for="email" :value="__('E-mail')" />
                        <x-input-label class="text-register"  for="email" :value="$evento->email" />
                    </div>

                    <!-- Endereço -->
                    <div>
                        <x-input-label class="text-register" for="endereco" :value="__('Endereço')" />
                        <x-input-label class="text-register"  for="endereco" :value="$evento->endereco" />
                    </div>

                    <!-- Telefone -->
                    <div>
                        <x-input-label class="text-register" for="telefone" :value="__('Telefone')" />
                        <x-input-label class="text-register"  for="telefone" :value="$evento->telefone" />
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
