<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#5e7c12" class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full">
                        <thead>
                            <tr style="text-align: left;">
                                <th class="pb-4">Nome</th>
                                <th class="pb-4">E-mail</th>
                                <th class="pb-4">Endereço</th>
                                <th class="pb-4">Telefone</th>
                                <th class="pb-4" style="width: 70px;"></th>
                                <th class="pb-4" style="width: 70px;">
                                    <form style="display: flex; justify-content: right; margin: 0;" method="GET" action="{{ ('create') }}" class="mt-6 space-y-6"><a href="{{ route('evento.create') }}">
                                        <img src="{{ asset('images/adicionar.png') }}" style="width:20px;height:20px;" alt="Adicionar">
                                    </a></form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)
                                <tr style="text-align: left;">
                                    <td><a href="{{ route('evento.show', $evento->id) }}">{{ $evento->nome }}</a></td>
                                    <td>{{ $evento->email }}</td>
                                    <td>{{ $evento->endereco }}</td>
                                    <td class="telefone">{{ $evento->telefone }}</td>
                                    <td><form action="{{ route('evento.edit', $evento->id) }}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button type="submit">Editar</button>
                                    </form></td>
                                    <td><form action="{{ route('evento.destroy', $evento->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button-delete" type="submit">Excluir</button>
                                    </form></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="background-color:#5e7c12" class="p-6 pb-2 text-gray-900 dark:text-gray-100">
                    {{ $eventos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
