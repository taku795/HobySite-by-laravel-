@extends('hoby.layout')

@section('title','ログイン画面')
@section('content')
<h1>ログイン</h1>
<form action="/Login">
    ログインID：<input type="text">
    パスワード：<input type="text">
    <input type="submit" value="ログイン">
</form>
@endsection