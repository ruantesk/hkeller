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
                        <form method="GET" action="{{ ('create') }}" class="mt-6 space-y-6">
                        <table>
                            <tr style="text-align: left;color:#000000">
                                <th width="200px">Nome</th>
                                <th width="200px">E-mail</th>
                                <th width="200px">Endereço</th>
                                <th width="100px">Telefone</th>
                                <th width="40px"><a href='{{ __('create') }}'><img src="{{ asset('images/adicionar.png') }}" style="width:20px;height:20px;" alt="Adicionar"></a></th>
                                <th width="40px">&nbsp;</th>
                            </tr>

                            @foreach($tutores as $tutor)
                                <tr style="text-align: left;">
                                    <td>{{ $tutor->nome }}</td>
                                    <td>{{ $tutor->email }}</td>
                                    <td>{{ $tutor->endereco }}</td>
                                    <td>{{ $tutor->telefone }}</td>
                                    <td><form action="{{''.$tutor->id}}" method="GET"><button type="submit">Editar</button></form></td>
                                    <td><form action="{{''.$tutor->id}}" method="DELETE"><button type="submit">Excluir</button></form></td>
                                </tr>
                            @endforeach

                        </table> 
                        </form>
                    </div>
                
            </div>
        </div>
    </div>
</x-app-layout>