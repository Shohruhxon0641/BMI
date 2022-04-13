<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     CSRF Token
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $metaTitle ?? config('app.name','Laravel') }}</title>

    Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>

    Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    Icons
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    Bootstrap style
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



</head>
<body>
    <div id="app" class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Meeting Rooms') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('users') }}">Disabled</a>
                        </li>
                    </ul>

                    Right Side Of Navbar
                    <ul class="navbar-nav ms-auto">
                        Authentication Links
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
    @yield('script')
</body>
</html> -->















<!-- <div class="relative flex me-md-2">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block me-md-3">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline me-md-4">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>  -->












    <!-- Image card -->

    <!-- <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="assets/images/Wedding_rings.jpg" class="w-100" alt="">
                <div class="card-body">
                    <h5>Uabekistan Hotel</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, dolores.</p>
                </div>
                <div class="card-footer">
                    <p>
                        <b>120000 sum</b>
                        <b class="float-sm-end">
                            <i class="bi bi-clock-history"></i>
                            /
                            <i class="bi bi-person-fill"></i>
                        </b>
                    </p>
                    <a href="#" class="btn btn-success w-100">About</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="assets/images/bigData.jpg" class="w-100" alt="">
                <div class="card-body">
                    <h5>Uabekistan Hotel</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, dolores.</p>
                </div>
                <div class="card-footer">
                    <p>
                        <b>120000 sum</b>
                        <b class="float-sm-end">
                            <i class="bi bi-clock-history"></i>
                            /
                            <i class="bi bi-person-fill"></i>
                        </b>
                    </p>
                    <a href="#" class="btn btn-success w-100">About</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="assets/images/dataAnaliz.jpg" class="w-100" alt="">
                <div class="card-body">
                    <h5>Uabekistan Hotel</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, dolores.</p>
                </div>
                <div class="card-footer">
                    <p>
                        <b>120000 sum</b>
                        <b class="float-sm-end">
                            <i class="bi bi-clock-history"></i>
                            /
                            <i class="bi bi-person-fill"></i>
                        </b>
                    </p>
                    <a href="#" class="btn btn-success w-100">About</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/416320/pexels-photo-416320.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100" alt="">
                <div class="card-body">
                    <h5>Uabekistan Hotel</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, dolores.</p>
                </div>
                <div class="card-footer">
                    <p>
                        <b>120000 sum</b>
                        <b class="float-sm-end">
                            <i class="bi bi-clock-history"></i>
                            /
                            <i class="bi bi-person-fill"></i>
                        </b>
                    </p>
                    <a href="#" class="btn btn-success w-100">About</a>
                </div>
            </div>
        </div>
    </div> -->
