@extends('template_admin.index')

@section('conteudo')
    <h2>Você está na view clientes</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($clientes as $linha)
                <tr>
                    <td>{{ $linha->nomeCompleto }}</td>
                    <td>{{ $linha->cpf }}</td>
                    <td>{{ $linha->dataNasc }}</td>
                    <td>{{ $linha->email }}</td>
                    <td>{{ $linha->endereco }}</td>
                    <td>{{ $linha->sexo }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection

