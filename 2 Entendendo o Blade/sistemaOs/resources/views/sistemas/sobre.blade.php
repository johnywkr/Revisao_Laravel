@extends('layouts.main')

@section('title', 'Sobre')
@section('content')

<h1>Sobre</h1>

    @foreach($nomes as $nome)       <!--A cada valor da variavel $nomes eu vou adicionar em nomes.-->
        <p> Nome: {{$nome}}</p>
    @endforeach

    <p> Idade: {{$idade}}</p>
@endsection