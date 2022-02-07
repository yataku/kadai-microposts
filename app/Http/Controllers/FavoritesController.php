<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * お気に入りするアクション。
     *
     * @param  $id  お気に入り対象のmicropostId
     * @return \Illuminate\Http\Response
     */
     public function store($id) {
         // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入りする
         \Auth::user()->favorite($id);
         
         return back();
     }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  お気に入り対象のmicropostId
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
         // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入りから削除する
         \Auth::user()->unfavorite($id);
         
         return back();
     }
}
