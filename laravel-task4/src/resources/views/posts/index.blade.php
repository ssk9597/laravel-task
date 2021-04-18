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
                            {{-- postsテーブル->likesテーブルの1番目->likes.like --}}
                            <p>いいね：{{ $post->likes[0]->like }}</p>

                            <form action="{{ route('likes.update', $post->likes[0]->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                {{-- 白 --}}
                                @if ($post->likes[0]->likecheck === 0)
                                    <input type="hidden" name="fill" value="white">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-heart" viewBox="0 0 16 16">
                                            <path
                                                d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </button>
                                @else
                                    {{-- 黒 --}}
                                    <input type="hidden" name="fill" value="black">
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-heart-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                        </svg>
                                    </button>
                                @endif
                            </form>

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
