@extends('layout.main')

@section('title', 'Cadastro')

@section('content')


<div class="form-container">
    <form class="form" action="/events" method="POST">
        @csrf
        <h2>CADASTRO</h2>
        <span>Informe os dados abaixo para poder se cadastrar no<br/>sistema</span>

        <!-- Validar os campos e retornar as mensagens de erros necessárias -->

        @if ($errors->has('nome_completo'))
            @foreach ($errors->get('nome_completo') as $error)
                <ul class="errors">
                    <li class="error">{{ $error }}</li>
                </ul>
            @endforeach
        @endif

        @if ($errors->has('cpf'))
            @foreach ($errors->get('cpf') as $error)
                <ul class="errors">
                    <li class="error">{{ $error }}</li>
                </ul>
            @endforeach
        @endif

        @if ($errors->has('email'))
            @foreach ($errors->get('email') as $error)
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

        
        
        <label for="nome_completo">NOME COMPLETO</label>
        <input id="nome_completo" name="nome_completo" type="text" placeholder="ex: joão da silva" value="{{ old('nome_completo') }}">

        <label for="cpf">CPF</label>
        <input id="cpf" name="cpf" type="number" placeholder="xxx.xxx.xxx-xx" value="{{ old('cpf') }}">

        <label for="email">EMAIL</label>
        <input id="email" name="email" type="email" placeholder="seuemail@grupounibra.com" value="{{ old('email') }}">

        <label for="senha">SENHA</label>
        <input id="senha" name="senha" type="password" placeholder="xxxxxxxx"   >

        <button type="submit">Cadastrar</button>

        <div class="links">
            <a href="/">Voltar</a> 
        </div>

        <div class="barra-inferior"></div>
    </form>
</div>


@endsection