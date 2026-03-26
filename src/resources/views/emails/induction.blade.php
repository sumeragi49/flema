@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/induction.css') }}" >
@endsection

@section('content')
<div class="induction_content">
    <div class="text">
        <h3>登録していただいたメールアドレスに認証メールを送付しました。<br>メール認証を完了してください</h3>
    </div>
    <div class="mail-url">
        <a href="http://localhost:8025/">認証はこちらから</a>
    </div>
    <div class="re-mail-url">
        <a href="/mail">認証メールを再送する</a>
    </div>
</div>
@endsection