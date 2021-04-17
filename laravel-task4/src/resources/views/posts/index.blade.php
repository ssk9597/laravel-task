@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $post)
                    <div class="card mb-2">
                        <div class="card-header"> {{ $post->title }}</div>

                        <div class="card-body">
                            <p>{{ $post->body }}</p>
                            {{-- postsテーブル->usersテーブル->users.name --}}
                            <p>投稿者：{{ $post->user->name }}</p>
                            <p>いいね：1</p>

                            @if (Auth::id() === $post->user->id)
                                <form style="display: inline-block" action="{{ route('posts.edit', $post->id) }}"
                                    method="GET">
                                    <input type="submit" class="btn btn-primary" value="編集">
                                </form>
                                <form style="display: inline-block" action="{{ route('posts.destroy', $post->id) }}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" class="btn btn-danger" value="削除">
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<input type="hidden" name="login_user" value="{{ Auth::user() }}">
