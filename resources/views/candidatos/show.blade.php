@extends('candidatos.layout')
  
@section('content')
<div class="">
    <div class="uk-grid-small uk-child-width-1-2@m uk-margin-large-top uk-margin-medium-bottom" uk-grid>
        <div class="">
            <h2>Candidatos</h2>
        </div>
        <div class="uk-text-right">
            <a class="uk-button uk-button-secondary uk-border-rounded" href="{{ route('candidatos.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
    <div class="uk-gris-small uk-child-width-1-3@m" uk-grid>
        <div class="">
            <div class="form-group">
                <strong>Foto:</strong>
                {{ $collection->foto }}
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $collection->nome }}
            </div>
        </div>
        <div class="">

        <label><input class="uk-checkbox" type="checkbox" name="sbot" @if{$collection->sbot} checked="checked" @endif> SBOT</label>
        <label><input class="uk-checkbox" type="checkbox" name="coomtoce" @if{$collection->coomtoce} checked="checked" @endif> COOMTOCE</label>
            
        </div>             
    </div>
@endsection