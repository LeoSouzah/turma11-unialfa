@extends('app')
@section('title', 'Lista de clientes')
@section('content')
    <h1>Lista de Cliente</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <th space="row"> {{ $client->id }} </th>
                <td>
                    <a href="{{ route('clients.show', $client)}}">
                        {{ $client->nome }}
                    </a>
                </td>
                <td> {{ $client->endereço }} </td>
                <td>@mdo</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection