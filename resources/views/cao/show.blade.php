<x-app-layout>
    <style>
        .window {
          position: relative;
          width: 300px;
          border: 1px solid #ccc;
          border-radius: 5px;
          padding: 10px;
          background-color: #255222;
        }

        .close {
          position: absolute;
          top: 5px;
          right: 5px;
          cursor: pointer;
        }

        .label {
          font-weight: bold;
          padding: 0%;
        }

        .input {
          width: 95%;
          padding: 5px;
          margin-bottom: 10px;
          border: 1px solid #ccc;
          border-radius: 3px;
          font-size: 14px;
          resize: none;
          background-color: #184232;
        }

        .button {
          padding: 8px 12px;
          background-color: #3f88c5;
          color: #fff;
          border: none;
          border-radius: 3px;
          cursor: pointer;
        }

        .button:hover {
          background-color: #2b628d;
        }
      </style>
    <script src="{{ asset('js/divEvento.js') }}"></script>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#5e7c12" class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex space-x-4">
                        <a href="{{ route('cao.index') }}"><img src="{{ asset('images/voltar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Voltar"></a>
                        <a href="{{ route('cao.edit', $cao->id) }}"><img src="{{ asset('images/editar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Editar"></a>
                    </div>

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="mt-6 space-y-6">
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

                        <!-- Pai -->
                        <div>
                            <x-input-label class="text-register" for="pai" :value="__('Pai')" />
                            <x-input-label class="text-register" for="pai" :value="$caoPai ? $caoPai->nome : 'N/A'" />
                        </div>

                        <!-- Mãe -->
                        <div>
                            <x-input-label class="text-register" for="mae" :value="__('Mãe')" />
                            <x-input-label class="text-register" for="mae" :value="$caoMae ? $caoMae->nome : 'N/A'" />
                        </div>

                        <!-- Eventos -->
                        <div>
                            {{-- <div class="block"> --}}
                                <x-input-label class="text-register inline-block" for="eventos" :value="__('Eventos')" />
                                {{-- <img class="inline-block" src="{{ asset('images/adicionar.png') }}" style="width:20px;height:20px;cursor:hand;" alt="Voltar">
                            </div> --}}
                            <div class="pt-4">
                                <table class="table-auto">
                                    <thead>
                                        <tr>
                                            <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-left">Descricao</th>
                                            <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-left">Data</th>
                                            <th class="font-medium p-4 pt-0 pb-3 text-left">
                                                <img onclick="toggleDiv(document.getElementById('divDescricao'));" class="inline-block" src="{{ asset('images/adicionar.png') }}" style="width:20px;height:20px;cursor:pointer;" alt="Criar">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($eventos as $evento)
                                        <tr>
                                            <td class="border-b border-slate-100 p-4 pl-8">{{ $evento->descricao }}</td>
                                            <td class="border-b border-slate-100 p-4 pl-8">{{ $evento->data_evento }}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('evento.store') }}" class="mt-6 space-y-6">
                            @csrf
                            <input type="hidden" id="cao_id"  name="cao_id" value="{{ $cao->id }}"/>
                            <div id="divDescricao" class="window" style="display: none;">
                                <span class="close" onclick="JavaScript:toggleDiv(this.parentNode);">&times;</span>
                                <h2>Evento</h2>

                                <div>
                                    <x-input-label class="text-register" for="data_evento" :value="__('Data de nascimento')" />
                                    <x-text-input class="label date" id="data_evento" type="text" name="data_evento" :value="old('data_evento')" required autofocus />
                                    <x-input-error :messages="$errors->get('data_evento')" class="mt-2" />
                                </div>

                                <x-input-label class="text-register label" for="data_evento" :value="__('Descrição')" />
                                <textarea class="input border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" id="descricao" name="descricao" rows="2" cols="30"></textarea>
                                <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                                <button class="button" onclick="confirmDiv(document.getElementById('descricao'));">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
