@extends('layout')
@section('header-right')
    @if ($name)
        <div>
            <p class="header-right-text">
                {{ $name }}さん
            </p>
        </div>
        <a href="/logout">
            <p class="header-right-text">
                Logout
            </p>
        </a>
    @else
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
    @endif
@endsection
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection
