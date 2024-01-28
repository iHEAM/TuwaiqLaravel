<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>HEY♨AM</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <style>
            .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
            }
    </style> -->

</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route("welcome")}}">HEY♨AM</a>
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                @if(Auth::guest())
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("welcome")}}">Home</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('itemgroup')}}"> Group of Items</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('items')}}">Items</a>
                        </li>  

                        <li class="nav-item">
                            <a class="nav-link" href="{{route("controlpanel")}}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="{{route('checkout')}}">
                        <i class="bi bi-cart"></i> 
                        <span class="badge text-bg-danger  translate-middle rounded-circle pt-2">{{Session::get('countitem')}}
                        </span>
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>

                
                @else
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("welcome")}}")}}">Home</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('itemgroup')}}"> Group of Items</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('items')}}">Items</a>
                        </li>  

                        <li class="nav-item">
                            <a class="nav-link" href="{{route("controlpanel")}}">Dashboard</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="{{route('checkout')}}">
                        <i class="bi bi-cart"></i> 
                        <span class="badge text-bg-danger  translate-middle rounded-circle pt-1">{{Session::get('countitem')}}
                        </span>
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
                        </li>
                    </ul>
                </div>
                @endif
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


