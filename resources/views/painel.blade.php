@extends('layouts.app')

@section('content')
<div class="uk-section">
    <div class="uk-container">
        <div>
            <!-- <h2 class="uk-margin-medium-bottom">{{ __('Painel') }}</h2> -->
            @if (session('status'))
                <p>{{ session('status') }}</p>
            @endif                       
        </div>
        <div class="uk-margin-top uk-margin-bottom uk-child-width-1-2@m uk-grid-small" uk-grid>
            <div>
                <h3>Eleitores</h3>
            </div>
            <div class="uk-text-right">
                <a href="{{ route('eleitores.create') }}" class="uk-button uk-button-primary uk-border-rounded">Cadastrar Eleitor</a>
                <a href="{{ route('eleitores.index') }}" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-left">Todos Eleitores</a>
            </div>
        </div>
        <div class="uk-margin-top uk-child-width-1-2@m uk-grid-small" uk-grid>
            <div>
                <h3>Candidatos</h3>
            </div>
            <div class="uk-text-right">
                <a href="{{ route('candidatos.create') }}" class="uk-button uk-button-primary uk-border-rounded">Cadastrar Candidato</a>
                <a href="{{ route('candidatos.index') }}" class="uk-button uk-button-primary uk-border-rounded uk-margin-small-left">Todos Candidatos</a>
            </div>
        </div>        
    </div>
</div>
@endsection
