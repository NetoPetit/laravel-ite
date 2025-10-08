@extends('template_admin.index')

@section('conteudo')
    <h2>Você está na view carros</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($carros as $linha)
                <tr>
                    <td>{{ $linha->marca }}</td>
                    <td>{{ $linha->modelo }}</td>
                    <td>{{ $linha->ano_fabricacao }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
