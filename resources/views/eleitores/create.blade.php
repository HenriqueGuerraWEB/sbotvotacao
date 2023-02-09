@extends('eleitores.layout')
  
@section('content')
<div class="">
    <div class="uk-grid-small uk-child-width-1-2@m uk-margin-large-top uk-margin-medium-bottom" uk-grid>
        <div class="">
            <h2>Novo Eleitor</h2>
        </div>
        <div class="uk-text-right">
            <a class="uk-button uk-button-secondary uk-border-rounded" href="{{ route('eleitores.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Houve algum problema com sua validação.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('eleitores.store') }}" method="POST" class="forms">
    @csrf
    @include('eleitores._form')   
</form>
@endsection