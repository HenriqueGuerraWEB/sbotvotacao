<!DOCTYPE html>
<html>
<head>
    <title>SBOTCE</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/css/uikit.min.css">
    <link rel="stylesheet" href="/custom.css">      
</head>
<body>
    
<div id="app" class="">
    <div  class="uk-section uk-padding-remove">
    @guest
    @else
        <div class="contetAPP">
    @endguest
    @guest
    @else
    
    <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="navbar-brand" href="{{ url('/painel') }}">
                        <img src="/images/logo.jpg" alt="{{ __('SBOTCE') }}" class="logo">
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                    </div>
                </div>
                <div class="uk-navbar-right">

                        <!-- Right Side Of Navbar -->
                        <ul class="uk-navbar-nav uk-flex-middle">
                            <!-- Authentication Links -->
                                <li class="">


                                    <a href="#">{{ Auth::user()->name }} </a>

                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>                                                
                                </li>
                           
                        </ul>
                </div>
            </nav>

    @endguest
        

        <main class="uk-container">
            @yield('content')
        </main>
    @guest
    @else
        </div><!-- CONTENT APP -->
    @endguest        
    </div> <!-- CONTENT FLEX -->

</div>
<script src="/js/uikit.min.js"></script>
<script src="/js/uikit-icons.min.js"></script>

</body>
</html>