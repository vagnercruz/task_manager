@extends('layouts.app')

@section('content')
<div class="ui grid">
    <div class="four wide column">
        @include('partials.sidebar')
    </div>
    <div class="twelve wide column">
        <h1 class="ui header">Painel de Controle</h1>
        <div class="ui segment">
            <p>Bem-vindo ao seu painel de controle!</p>
        </div>
    </div>
</div>
@endsection
