@extends('layouts.app')

@section('content')

    <div class="welcome">
        <img src="{{ asset('images/logo-restaurante.png') }}">
        <h1> 
            Seja bem-vindo! Para iniciar o atendimento é preciso realizar o  <a href="{{ route('login') }}">login!</a>
            Ou então, <a href="{{ route('register') }}">Cadastre-se</a>
        </h1>
            
    </div>
    
@endsection