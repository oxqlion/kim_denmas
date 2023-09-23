<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $active }} Page</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</head>

<body>

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ ($active == "Home") ? "active" : ""  }}" aria-current="true" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active == "Pembukuan") ? "active" : ""  }} "  aria-current="true"  href="{{ route('pembukuan-main') }}">Pembukuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active == "UMKM") ? "active" : ""  }} "  aria-current="true"  href="{{ route('umkm') }}">UMKM</a>
                </li>
            </ul>
        </div>




        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
