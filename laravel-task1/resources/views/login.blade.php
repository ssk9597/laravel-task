@extends('layout')
@section('content')
    <h2>ログイン</h2>
    <form action="" method="POST">
        @csrf
        <label for="email">メールアドレス</label>
        <input type="text" name="email">
        <br>
        <label for="password">パスワード</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="ログイン">
    </form>
@endsection
