@extends('template_admin.index')

@section('conteudo')

    <h2>Cadastrar novo carro</h2>

    <div class="container">
        <form action="{{ route('carros.novo') }}" method="post">
            @csrf
            <div class="row">
                <span>Marca</span>
                <input type="text" name="marca" id="marca">
            </div><div class="row">
                <span>Modelo< /span>
                <input type="text" name="modelo" id="modelo">
            </div>
            <div class="row">
                <span>Cor</span>
                <input type="text" name="cor" id="cor">
            </div>
            <div class="row">
                <span>Ano Fabricação</span>
                <input type="text" name="ano_fabricacao" id="ano_fabricacao">
            </div>
            <div class="row">
                <input type="submit" title="SALVAR" class="btn btn-success">
            </div>
        </form>
    </div>

@endsection
