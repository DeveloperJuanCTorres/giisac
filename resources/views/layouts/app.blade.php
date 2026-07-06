<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'G&I S.A.C.') }}</title>

    <?php
    $version = '1993.4.9';
    ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <link href="{{asset('css/whatsapp.css')}}?v=<?php echo $version ?>" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}?v=<?php echo $version ?>" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}?v=<?php echo $version ?>" rel="stylesheet">


    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>

<body class="bg-background text-on-background font-body-md overflow-x-hidden selection:bg-secondary-fixed selection:text-on-secondary-fixed">
    <div>
        @include('partials.navbar')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>

    <div id="wa-widget">
        <div class="wa-box">
            <div class="wa-header">
                <!-- <img src="{{ asset('images/whatsapp-logo.png') }}"> -->
                <div>
                    <strong>¿Necesitas ayuda?</strong>
                    <small>Selecciona un asesor</small>
                </div>
            </div>
            <div class="wa-body">
                @foreach($specialists as $item)
                <a
                    href="https://wa.me/51{{ $item->whatsapp }}"
                    target="_blank"
                    class="wa-item">

                    <img
                        src="{{ asset('storage/'.$item->imagen) }}">
                    <div class="wa-info">
                        <span>
                            {{ $item->nombre }}
                        </span>
                        <small>
                            {{ $item->cargo }}
                        </small>
                    </div>
                </a>
                @endforeach

            </div>
        </div>

        <button id="wa-button">
            <i class="fab fa-whatsapp"></i>
        </button>
    </div>

    <script>
        const btn=document.getElementById('wa-button');

        const box=document.querySelector('.wa-box');

        btn.onclick=()=>{

        box.style.display=
        box.style.display==="block"
        ?"none"
        :"block";

        }
    </script>
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>

</html>