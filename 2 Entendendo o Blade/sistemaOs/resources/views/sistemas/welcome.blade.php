@extends('layouts.main')

@section('title', 'Inicio')
@section('content')

<h1>Seja Bem Vindo!</h1>

    @if(5 == 6)
        <p>condição verdadeira</p>
    @else
        <p> condição false</p>
    @endif

    <!-- 

    @for($c = 0; $c < count($nomes); $c++)
        <p>Nome: {{$nomes[$c]}}</p>
    @endfor
-->

    @foreach($nomes as $nome)
        <p>Nome: {{$nome}}</p>
    @endforeach

@endsection