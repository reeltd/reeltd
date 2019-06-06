<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ReeLTD') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    
    
    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!-- iPhone enable -->
    <link rel="manifest" href="{{ asset('js/manifest.json') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!--<script type="text/javascript" src="https://ipool.remotewebaccess.com/wp-content/uploads/jquery-3.3.1.min.js"></script>-->
    <link rel="apple-touch-icon" href="{{ asset('assets/imgs/reeltd-512x512-color.png') }}" />
    <link rel="apple-touch-startup-image" href="{{ asset('assets/imgs/launcher-img.png') }}">
    <meta name="apple-mobile-web-app-title" content="ReeLTD Portal">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="icon" href="{{ asset('assets/imgs/reeltd-512x512-color.png') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img width="35px" hieght="35px" src="{{ asset('assets/imgs/reeltd-512x512-color.png') }}">  {{ config('app.name', 'ReeLTD') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav mr-auto">
                    
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <!--<span class="nav-item">
                    <a class="nav-link" href="">Browse All Products.</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="">Add Product</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="">Middle</a>
                    </span>
                    <span class="nav-item">
                    <a class="nav-link" href="">Middle</a>
                    </span>-->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                    <ul class="navbar-nav mr-auto">
                        <span class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-list-alt"></i> Browse Items</a>
                        </span>
                        <span class="nav-item">
                            <a class="nav-link" href="#"><i class="far fa-id-card"></i> Browse Customers</a>
                        </span>

                        <li class="nav-item">
                            <a class="nav-link" href="/root/readme-v0.03"><i class="fas fa-info fa-fw"></i> Docs </a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link " href="{{ route('home') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i> Welcome {{ Auth::user()->name }}<span class="caret"></span>
                                </a>
                                <div class="dropdown dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-menu dropdown-menu-right" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<hr>
<footer class="footer">
      <div class="container">
        <div id="ftr-wrap">
            <div class="ftr-links">
                <ul class="ml-auto" style="float:right">                   
                   <span><a style="font-size:10px;" href="#">Terms</a></span>&nbsp;&nbsp;  | &nbsp;&nbsp;
                   <span><a style="font-size:10px;" href="#">Privacy Policy</a></span>&nbsp;&nbsp; | &nbsp;&nbsp;     
                   <span><a style="font-size:10px;" href="#">Sitemap</a></span>     
                </ul>
            </div>
            <div class="copyright-reeltd">
            <?='<span class="pull-left" style="font-size:10px; padding-left:0px;">Copyright &copy; ' . date("Y") . ' <a href="/">Real Estate Empire LTD.</a>.</span><span style="font-size:10px" class="copyright"> SA, Riyadh. C.R. 0001231212</span>';?>
            </div>     
        </div>
      </div>
</footer>
</html>