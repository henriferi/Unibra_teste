@extends('layout.main')

@section('title', 'Recuperar Senha')

@section('content')


<div class="form-container">
    <form class="form" action="/events" method="POST">

        @csrf
        <!-- Validar os campos e retornar as mensagens de erros necessárias -->

        <h2>RECUPERAR SENHA</h2>
        <span>Informe abaixo seu CPF e Senha para recuperar sua senha,<br/>enviaremos um link para o email cadastrado.</span>

        @if ($errors->has('cpf',))
            <ul class="errors">               
                <li class="error">{{ $errors->get('cpf') }}</li>                    
            </ul>
        @endif

        <label for="cpf">CPF</label>
        <input id="cpf" name="cpf" type="number" placeholder="xxx.xxx.xxx-xx" value="{{ old('cpf') }}">

        <button type="submit">Enviar</button>

        <div class="links">
            <a href="/">Voltar</a>
        </div>

        <div class="barra-inferior"></div>
    </form>
</div>

@endsection