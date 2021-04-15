@extends('layout')
@section('header-right')
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
@endsection
@section('content')
    <h2>新規登録</h2>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        {{ csrf_field() }}
        <label for="name">名前</label>
        <input type="text" name="name">
        <br>
        <label for="email">メールアドレス</label>
        <input type="text" name="email">
        <br>
        <label for="password">パスワード</label>
        <input type="password" name="password">
        <br>
        <label for="password_confirmation">パスワード確認用</label>
        <input type="password" name="password_confirmation">
        <br>
        <input type="submit" value="新規登録">

        {{-- エラーメッセージ --}}
        @error('name')
            <div>
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        @error('email')
            <div>
                <strong>{{ $message }}</strong>
            </div>
        @enderror
        @error('password')
            <div>
                <strong>{{ $message }}</strong>
            </div>
        @enderror
    </form>
@endsection
