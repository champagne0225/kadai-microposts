<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション。
     *
     * @param $id お気に入り登録する投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
      // 認証済みユーザ(閲覧者)が、idの投稿をお気に入り登録する
      \Auth::user()->favorite($id);
      // 前のURLへリダイレクトさせる
      return back();
    }
    
    /**
     *
     * 投稿をお気に入り解除するアクション。
     * 
     * @param $id お気に入り解除する投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // 認証済みユーザ(閲覧者)が、idの投稿をお気に入り解除する
      \Auth::user()->unfavorite($id);
      // 前のURLへリダイレクトさせる
      return back();
    }
}
