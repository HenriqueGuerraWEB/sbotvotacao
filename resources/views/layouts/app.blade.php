<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('SBOTCE') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="/css/uikit.min.css">
    <link rel="stylesheet" href="/custom.css">    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
                    <a class="navbar-brand" href="{{ url('/') }}">
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
        

        <main class="py-4">
            @yield('content')
        </main>
    @guest
    @else
        </div><!-- CONTENT APP -->
    @endguest        
    </div> <!-- CONTENT FLEX -->

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/uikit.min.js"></script>
    <script src="/js/uikit-icons.min.js"></script>
<script>
// the selector will match all input controls of type :checkbox
// and attach a click event handler 
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});    
</script>
</body>
</html>
