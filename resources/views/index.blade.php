@extends('layouts.app')

@section('title', 'TOP')
@section('keywords', 'cocolabo チャットアプリ')
@section('description', 'チャットアプリです')

@section('content')
  <div class="mx-auto w-50 pt-5">
    <form action="{{ route('chat.index') }}" method="GET">
      <div class="form-group">
        <label for="name">名前</label>
        <input id="name" type="test" class="form-control" id="name" placeholder="Enter name" maxlength="20">
      </div>
      <button type="submit" class="btn btn-primary">チャット開始</button>
    </form>
  </div>
@endsection
