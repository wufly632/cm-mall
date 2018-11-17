<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'cm-mall') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @component('auth.components.LoginTopComponent')
            @if(\Request::route()->named('register'))
            <li class="nav-item">
                <a class="nav-link" href="/login">登录</a>
            </li>
            @elseif(\Request::route()->getName('login'))
            <li class="nav-item">
                <a class="nav-link" href="/register">注册</a>
            </li>
            @endif
        @endcomponent
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
