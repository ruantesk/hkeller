<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#94C21C" class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full">
                        <thead>
                            <tr style="text-align: left;color:#000000">
                                <th class="pb-4">Nome</th>
                                <th class="pb-4">E-mail</th>
                                <th class="pb-4">Endereço</th>
                                <th class="pb-4">Telefone</th>
                                <th class="pb-4" style="width: 70px;"></th>
                                <th class="pb-4" style="width: 70px;">
                                    <form style="display: flex; justify-content: right; margin: 0;" method="GET" action="{{ ('create') }}" class="mt-6 space-y-6"><a href="{{ route('tutor.create') }}">
                                        <img src="{{ asset('images/adicionar.png') }}" style="width:20px;height:20px;" alt="Adicionar">
                                    </a></form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tutores as $tutor)
                                <tr style="text-align: left;">
                                    <td><a href="{{ route('tutor.show', $tutor->id) }}">{{ $tutor->nome }}</a></td>
                                    <td>{{ $tutor->email }}</td>
                                    <td>{{ $tutor->endereco }}</td>
                                    <td class="telefone">{{ $tutor->telefone }}</td>
                                    <td><form action="{{ route('tutor.edit', $tutor->id) }}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button type="submit">Editar</button>
                                    </form></td>
                                    <td><form action="{{ route('tutor.destroy', $tutor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button-delete" type="submit">Excluir</button>
                                    </form></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
