<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Models\User;
use App\Models\Post;

// Auth
use Auth;

class LikeController extends Controller
{
  public function update(Request $request, $id)
  {
    $post = Post::find($id);
    if ($post->likes()->count() <= User::all()->count()) {
      $post->likes()->attach(Auth::id());
    }

    return redirect("posts");
  }

  public function destroy(Request $request, $id)
  {
    $post = Post::find($id);
    if ($post->likes()->count() >= 0) {
      $post->likes()->detach(Auth::id());
    }

    return redirect("posts");
  }
}
