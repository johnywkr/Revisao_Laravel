@extends('layouts.main')

@section('title', 'Cadastrar Cliente')
@section('content')

<section class="cadastrar-cliente m-auto">
    <h1>Cadastrar Clientes</h1>

    <form class="row g-3" action="/cliente" method="post">
        <div class="col-md-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="col-md-4">
            <label for="nome" class="form-label">Cpf</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="col-md-4">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder=" Qnn 2 conjunto H casa 11" name="endereco">
        </div>
        <div class="col-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="email">
        </div>
        <div class="col-md-4">
            <label for="datanasc" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="datanasc" name="datanasc">
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection