@extends('layouts.app')

@section('content')


<div  class="uk-section uk-padding-remove appHomeCRM">
    <div  class="uk-container uk-container-small containerCRM uk-text-center">

        <div class="logo">
            <img src="/images/logo.jpg" alt="SBOTCE">
        </div>
        <p>{{ __('LOGIN SBOTCE ADMIN') }}</p>


        <form method="POST" class="uk-text-left" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                                <input class="uk-input uk-border-rounded @error('email') is-invalid @enderror" id="email" type="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    {{ $message }}
                                </div>
                            @enderror                            
                        </div>
                        <div class="uk-margin-top">
                            <div class="uk-inline">
                                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                <input class="uk-input uk-border-rounded @error('password') is-invalid @enderror" id="password" type="password" placeholder="Senha" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    {{ $message }}
                                </div>
                            @enderror                             
                        </div>   
                        <div class="uk-margin-top">
                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>   {{ __('Lembrar') }}</label>
                            </div>                            
                        </div>    
                        
                        <div>
                            <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="uk-margin-top uk-text-center">
                            @if (Route::has('password.request'))
                                <a class="uk-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueci minha senha') }}
                                </a>
                            @endif
                            <span class="separador uk-display-inline-block uk-margin-small-left uk-margin-small-right"></span>
                            <a class="uk-link" href="{{ url('/register') }}">
                                {{ __('Criar conta') }}
                            </a>
                        </div>










                    </form>


    </div>
</div> 
@endsection
