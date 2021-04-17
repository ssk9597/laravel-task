@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('posts.store') }}" method="POST" class="col-md-8">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">タイトル</label>
                    <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                        <span>
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">コンテンツ</label>
                    <textarea class="form-control" id="body" rows="5" name="body"></textarea>
                    @error('body')
                        <span>
                            <strong style="color: red">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="hidden" for="id" name="user_id" value="{{ Auth::id() }}">
                <input type="submit" class="btn btn-primary" value="新規投稿">
            </form>
        </div>
    </div>
@endsection
