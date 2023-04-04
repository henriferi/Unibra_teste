@extends('layout.main')

@section('title', 'Atentificação')

@section('content')


<div class="form-container">
    <form class="form" action="/events" method="POST">

        @csrf

        <!-- Validar os campos e retornar as mensagens de erros necessárias -->
        <h2>AUTENTIFICAÇÃO</h2>
        <span>Infome abaixo seu CPF e Senha para fazer login no <br/>sistema da unibra.</span>

        @if ($errors->has('cpf'))
            @foreach ($errors->get('cpf') as $error)
                <ul class="errors">
                    <li class="error">{{ $error }}</li>
                </ul>
            @endforeach
        @endif

        @if ($errors->has('senha'))
            @foreach ($errors->get('senha') as $error)
                <ul class="errors">
                    <li class="error">{{ $error }}</li>
                </ul>
            @endforeach
        @endif


        <label for="cpf">CPF</label>
        <input id="cpf" name="cpf" type="number" placeholder="xxx.xxx.xxx-xx" value="{{ old('cpf') }}">

        <label for="senha">SENHA</label>
        <input id="senha" name="senha" type="password" placeholder="xxxxxxxx">

        <button type="submit">Entrar</button>

        <div class="links">
            <a href="/cadastro">Cadastrar-se</a>
            <a href="/recuperarSenha">Recuperar minha senha</a>
        </div>
        <div class="barra-inferior"></div>      
    </form>
</div>



@endsection