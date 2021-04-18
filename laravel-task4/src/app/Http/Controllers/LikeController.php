<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model
use App\Models\User;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
  public function update(Request $request, $id)
  {
    $fill = $request->input("fill");
    $like = Like::find($id);

    if ($fill === "white") {
      $like->fill(["like" => $like->like + 1, "likecheck" => 1])->save();
    } else {
      $like->fill(["like" => $like->like - 1, "likecheck" => 0])->save();
    }
    return redirect("posts");
  }
}
