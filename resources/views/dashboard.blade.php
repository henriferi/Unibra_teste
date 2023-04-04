@extends('layout.main')

@section('title', 'Dashboard')

@section('content')


<head>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<div class="form-container">
    <form class="form form-dashboard" action="/events" method="POST">

        @csrf
        

        <h2>DASHBOARD</h2>
        <span>Parabéns você está logado no sistema de testes</span>

        <h2>Olá, {{ $unibra_usuarios->nome_completo }} seja bem vindo(a) de volta!</h2>

            <button type="submit"><a class="link-redefinir-senha" href="/redefinirSenha">Mudar senha</a></button>

        <div class="links">
            <a id="link-sair-dashboard" href="/">Sair</a>
        </div>
        <div class="dashboard-barra"></div>      
    </form>
</div>



@endsection