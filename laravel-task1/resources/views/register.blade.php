@extends('layout')
@section('content')
    <h2>新規登録</h2>
    <form action="" method="POST">
        @csrf
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
    </form>
@endsection
