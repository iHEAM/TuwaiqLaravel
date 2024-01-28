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
                        <i class="bi bi-cart"></i> <span class="badge text-bg-danger translate-middle rounded-circle pt-1">{{Session::get('countitem')}}</span>
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

        <main class="py-1">
            <div class="row">
                <div class="col ">
                <div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                    <i class="bi-house fs-1"></i>
                </a>
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                <li class="nav-item">
                        <a href="{{route('addgitem')}}" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <h2><i class="bi bi-collection"></i></h2>

                        </a>
                    </li>
                    <li>
                        <a href="{{route('controlpanel')}}" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <h2><i class="bi bi-three-dots"></i></h2>

                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                        <h2><i class="bi bi-receipt-cutoff"></i></h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('checkout')}}" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                        <h3><i class="bi bi-cart"></i></h3>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Customers">
                            <i class="bi-people fs-1"></i>
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle h2"></i>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col pt-3">
            <!-- content -->
            <h4>DASHBOARD | ♨</h>
            <hr />
            @yield('content')
        </div>
    </div>
                </div>
                <!-- <div class="col">
                <div class="col-sm-8">
                </div> -->
            </div>
        </main>


    </div>
</body>
</html>


