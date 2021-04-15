<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Laravel課題①</title>
</head>

<body>
    <header class="header">
        <div class="header-left">
            <a href="/">
                <h1 class="header-left-text">
                    Laravel
                </h1>
            </a>
        </div>
        <div class="header-right">
            <a href="/login">
                <p class="header-right-text">
                    Login
                </p>
            </a>
            <a href="/register">
                <p class="header-right-text">
                    Register
                </p>
            </a>
        </div>
    </header>
    {{-- 固有 --}}
    @yield('content')
</body>

</html>
