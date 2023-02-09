@extends('candidatos.layout')
   
@section('content')
<div class="">
    <div class="uk-grid-small uk-child-width-1-2@m uk-margin-large-top uk-margin-medium-bottom" uk-grid>
        <div class="">
            <h2>Editar candidato</h2>
        </div>
        <div class="uk-text-right">
            <a class="uk-button uk-button-secondary uk-border-rounded" href="{{ route('candidatos.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('candidatos.update',$collection->id) }}" method="POST" class="forms">
        @csrf
        @method('PUT')
        @include('candidatos._form') 
   
    </form>
@endsection