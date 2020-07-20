@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザー情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- 投稿一覧 --}}
            @include('users.microposts')
            {{-- お気に入り/お気に入りを外すボタン --}}
            @include('user_favorite.favorite_button')
    </div>
@endsection