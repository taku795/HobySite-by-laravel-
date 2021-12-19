@extends('hoby.layout')

@section('title','ホーム画面')
@section('content')

@if($user=='gestuser')
    <button>ログイン</button>
    <button>新規登録</button>
@else
{{$user->user_name}}
@endif

<h1>記事一覧</h1>

<table>
    <tr>
        <th>タイトル</th>
        <th>コンテンツ</th>
        <th>投稿時間</th>
    </tr>
    @foreach($content as $row)
    <tr>
        <td>{{$row->title}}</td>
        <td>{{$row->content}}</td>
        <td>{{$row->day}}</td>
    </tr>
    @endforeach
</table>



@endsection