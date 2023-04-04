@extends('layout.main')

@section('title', 'Alterar Senha')

@section('content')


<div class="form-container">
    <form class="form" action="/events" method="POST">

        @csrf

        <h2>ALTERAR SENHA</h2>
        <span>Infome abaixo sua nova senha.</span>

        <label for="senha_cadastro">Nova senha</label>
        <input id="senha_cadastro" name="senha_cadastro" type="password" placeholder="xxxxxxxx">

        <label for="senha_cadastro_confirmation">Confirme a nova senha</label>
        <input id="senha_cadastro_confirmation" name="senha_cadastro_confirmation" type="password" placeholder="xxxxxxxx">

        <button type="submit">Atualizar senha</button>

        <div class="barra-inferior"></div>      
    </form>
</div>

@endsection