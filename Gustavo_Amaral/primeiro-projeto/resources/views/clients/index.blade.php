@extends('app')
@section('title', 'Lista de clientes')
@section('content')
    <h1>Lista Cliente</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Observação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{ $client->id}}</th>
                        <td>
                            <a href="{{ route('clients.show', $client) }}">
                                {{ $client->nome}}
                            </a>
                        </td>
                        <td>{{ $client->endereço }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection