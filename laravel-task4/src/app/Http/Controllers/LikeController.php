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
    // これがいいねされているかされていないかを判断（whiteは白塗りのためされていない、blackは黒塗りのためされている）
    $fill = $request->input("fill");

    // 選択された値を取得
    $like = Like::find($id);

    if ($fill === "white") {
      // 白塗りの場合いいねを1追加、likecheckを1にしてviewの方は黒塗りが表示されるようにする
      $like->fill(["like" => $like->like + 1, "likecheck" => 1])->save();
    } else {
      // 黒塗りの場合いいねを1減少、likecheckを0にしてviewの方は白塗りが表示されるようにする
      $like->fill(["like" => $like->like - 1, "likecheck" => 0])->save();
    }
    return redirect("posts");
  }
}
