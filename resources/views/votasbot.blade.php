@extends('layouts.app')

@section('content')

<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-text-center uk-margin-medium-bottom">VOTAÇÃO SBOTCE</h2>
        <form action="{{ route('votacao.post') }}" method="POST" class="forms">
          @csrf
          <input type="text" name="eleitor_id" value="{{ \Session::get('eleitor_id') }}"> 
          <input type="text" name="tipo_voto" value="sbot">        
        <div class="uk-grid-small uk-child-width-1-4@m uk-flex-center" uk-grid>
            @foreach ($candidatos as $candidato)
            @if($candidato->sbot) 
            <div>
                <div class="quiz_card_area">
                    <input class="quiz_checkbox" type="checkbox" id="{{ $candidato->nome }}" value="{{ $candidato->id }}" name="candidato_id" />
                    <div class="single_quiz_card uk-border-rounded">
                      <div class="quiz_card_content">
                        <div class="quiz_card_icon">
                          <div class="quiz_icon">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="80" height="80" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                </svg>                          

                          </div>
                        </div><!-- end of quiz_card_media -->

                        <div class="quiz_card_title">
                          <h3>{{ $candidato->nome }}</h3>
                        </div><!-- end of quiz_card_title -->
                      </div><!-- end of quiz_card_content -->
                    </div><!-- end of single_quiz_card -->
                  </div><!-- end of quiz_card_area -->                
            </div>
            @endif
            @endforeach
          
        </div>
        <div class="uk-text-center uk-margin-medium-top">
            <button class="uk-button uk-button-primary uk-border-rounded" type="submit">VOTAR</button>
        </div>
      </form>
    </div> 
</div>
   
@endsection