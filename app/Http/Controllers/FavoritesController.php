<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(string $micropostId)
    {
        // 認証済みユーザー（閲覧者）が、 idのユーザーをフォローする
        \Auth::user()->favorite(intval($micropostId));
        // 前のURLへリダイレクトさせる
        return back();
    }

    public function destroy(string $micropostId)
    {
        // 認証済みユーザー（閲覧者）が、 idのユーザーをアンフォローする
        \Auth::user()->unfavorite(intval($micropostId));
        // 前のURLへリダイレクトさせる
        return back();
    }
}
