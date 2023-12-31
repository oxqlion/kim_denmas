<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $active }} Page</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <style>
        main {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'Stok' ? 'active' : '' }}" aria-current="true"
                        href="{{ route('stok') }}">Stok Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'Pembukuan' ? 'active' : '' }} " aria-current="true"
                        href="{{ route('pembukuan-main', ['id' => '1']) }}">Pembukuan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active == 'UMKM' ? 'active' : '' }} " aria-current="true"
                        href="{{ route('umkm') }}">Manajemen Konten</a>
                </li>
            </ul>
        </div>




        <div class="h-100">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 h-100">
                @yield('content')
            </main>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
