@extends('layouts.app')

@section('title', 'Chat')
@section('keywords', 'cocolabo チャットアプリ')
@section('description', 'チャットアプリです')

@section('content')
  <div id="app">
    <chat-app user-id="{{ session()->getId() }}" user-name=" {{ $userName }}"/>
  </div>
@endsection
