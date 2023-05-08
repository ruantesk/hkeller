<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color:#5e7c12" class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full">
                        <thead>
                            <tr style="text-align: left;">
                                <th class="pb-4">Nome</th>
                                <th class="pb-4">Raca</th>
                                <th class="pb-4">Cor</th>
                                <th class="pb-4">Porte</th>
                                <th class="pb-4">Data de Nascimento</th>
                                <th class="pb-4" style="width: 70px;"></th>
                                <th class="pb-4" style="width: 70px;">
                                    <form style="display: flex; justify-content: right; margin: 0;" method="GET" action="{{ ('create') }}" class="mt-6 space-y-6"><a href="{{ route('cao.create') }}">
                                        <img src="{{ asset('images/adicionar.png') }}" style="width:20px;height:20px;" alt="Adicionar">
                                    </a></form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($caes as $cao)
                                <tr style="text-align: left;">
                                    <td><a href="{{ route('cao.show', $cao->id) }}">{{ $cao->nome }}</a></td>
                                    <td>{{ $cao->raca }}</td>
                                    <td>{{ $cao->cor }}</td>
                                    <td>{{ $cao->porte }}</td>
                                    <td>{{ $cao->data_nascimento }}</td>
                                    <td><form action="{{ route('cao.edit', $cao->id) }}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button type="submit">Editar</button>
                                    </form></td>
                                    <td><form action="{{ route('cao.destroy', $cao->id) }}" method="POST">
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
                    {{ $caes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
