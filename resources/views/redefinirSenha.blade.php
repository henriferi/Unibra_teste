@extends('layout.main')

@section('title', 'Alterar Senha')

@section('content')


<div class="form-container">
    <form class="form" action="/events" method="POST">

        @csrf

        <h2>ALTERAR SENHA</h2>
        <span>Infome abaixo sua nova senha.</span>

         <!-- Validar os campos e retornar as mensagens de erros necessárias -->

        @if ($errors->has('senha'))
            @foreach ($errors->get('senha') as $error)
                <ul class="errors">
                    <li class="error">{{ $error }}</li>
                </ul>
            @endforeach
        @endif

        <label for="senha">Nova senha</label>
        <input id="senha" name="senha" type="password" placeholder="xxxxxxxx">

        <label for="senha">Confirme a nova senha</label>
        <input id="senha" name="senha" type="password" placeholder="xxxxxxxx">

        <button type="submit">Atualizar senha</button>

        <div class="barra-inferior"></div>      
    </form>
</div>

@endsection