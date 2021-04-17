<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Models\User;
use App\Models\Post;

// Validation
use App\Http\Requests\StorePost;

class PostController extends Controller
{
  public function index()
  {
    // postsテーブル内をすべて取得
    $posts = Post::all();

    return view("posts/index", compact("posts"));
  }

  public function create()
  {
    return view("posts/create");
  }

  public function store(StorePost $request)
  {
    // Modelを呼び出す
    $post = new Post;

    // 保存（fillable→"title", "body", "user_id"）
    $post->fill($request->all())->save();

    return redirect("posts");
  }

  public function edit($id)
  {
    //選択した投稿内容を取得
    $post = Post::find($id);

    return view("posts/edit", compact("post"));
  }

  public function update(StorePost $request, $id)
  {
    //選択した投稿内容を取得
    $post = Post::find($id);
    // 保存（fillable→"title", "body", "user_id"）
    $post->fill($request->all())->save();

    return redirect("posts");
  }

  public function destroy($id)
  {
    Post::destroy($id);
    return redirect("posts");
  }
}
