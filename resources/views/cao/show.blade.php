<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#5e7c12" class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex space-x-4">
                        <a href="{{ route('cao.index') }}"><img src="{{ asset('images/voltar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Voltar"></a>
                        <a href="{{ route('cao.edit', $cao->id) }}"><img src="{{ asset('images/editar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Editar"></a>
                    </div>
                    <form method="GET" action="{{ route('cao.edit', $cao->id) }}" class="mt-6 space-y-6">
                    <!-- Nome -->
                    <div>
                        <x-input-label class="text-register" for="nome" :value="__('Nome')" />
                        <x-input-label class="text-register"  for="nome" :value=" $cao->nome " />
                    </div>

                    <!-- Raça -->
                    <div>
                        <x-input-label class="text-register" for="raca" :value="__('Raça')" />
                        <x-input-label class="text-register"  for="raca" :value="$cao->raca" />
                    </div>

                    <!-- Cor -->
                    <div>
                        <x-input-label class="text-register" for="cor" :value="__('Cor')" />
                        <x-input-label class="text-register"  for="cor" :value="$cao->cor" />
                    </div>

                    <!-- Porte -->
                    <div>
                        <x-input-label class="text-register" for="porte" :value="__('Porte')" />
                        <x-input-label class="text-register"  for="porte" :value="$cao->porte" />
                    </div>

                    <!-- Data_nascimento -->
                    <div>
                        <x-input-label class="text-register" for="data_nascimento" :value="__('Data de nascimento')" />
                        <x-input-label class="text-register"  for="data_nascimento" :value="$cao->data_nascimento" />
                    </div>

                    <!-- Eventos -->
                    <div>
                        <x-input-label class="text-register" for="eventos" :value="__('Eventos')" />
                        <div class="pt-4">
                            <table class="table-auto">
                                <thead>
                                    <tr>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-left">Id</th>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-left">Descricao</th>
                                        <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-left">Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-b border-slate-100 p-4 pl-8">1</td>
                                        <td class="border-b border-slate-100 p-4 pl-8">Teste do dog</td>
                                        <td class="border-b border-slate-100 p-4 pl-8">01/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b border-slate-100 p-4 pl-8">2</td>
                                        <td class="border-b border-slate-100 p-4 pl-8">Teste do dois</td>
                                        <td class="border-b border-slate-100 p-4 pl-8">02/05/2023</td>
                                    </tr>
                                    <tr>
                                        <td class="border-b border-slate-100 p-4 pl-8">3</td>
                                        <td class="border-b border-slate-100 p-4 pl-8">dogtres</td>
                                        <td class="border-b border-slate-100 p-4 pl-8">03/05/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
