@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
@endsection

@section('content')
<div class="mail-content">
    <div class="mail-title">
        <h1>認証完了</h1>
    </div>
    <div class="mail-content">
        <h2>下記のURLからprofile設定画面に遷移してください</h2>
        <a href="http://localhost/mypage/profile">profile画面</a>
    </div>
</div>
@endsection
