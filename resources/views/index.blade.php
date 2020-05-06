@extends('layouts.app')

@section('title', 'TOP')
@section('keywords', 'cocolabo チャットアプリ')
@section('description', 'チャットアプリです')

@section('content')
  <div>
    <form action="{{ route('chat.index') }}" method="GET">
      名前：<input type="text" name="user_name" maxlength="50"><br>
      <button type="submit">チャット開始</button>
    </form>
  </div>
@endsection
