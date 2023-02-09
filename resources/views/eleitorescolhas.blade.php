@extends('layouts.app')

@section('content')

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-text-center btsEscolhas">
                <div class="uk-grid-small uk-flex-middle uk-flex-center uk-child-width-1-2@m" uk-grid>
                    @if($eleitor->sbot)    
                    <div>
                        <h2>SBOT</h2> 
                        <a href="{{ route('votasbot') }}" class="uk-button uk-button-primary">VOTAR</a> 
                    </div>
                    @endif
                    @if($eleitor->coomtoce)
                    <div>
                        <h2>COOMTOCE</h2> 
                        <a href="{{ route('votacoomtoce') }}" class="uk-button uk-button-primary">VOTAR</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>    
    </div>

@endsection