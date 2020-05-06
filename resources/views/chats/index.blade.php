@extends('layouts.app')

@section('title', 'TOP')
@section('keywords', 'cocolabo チャットアプリ')
@section('description', 'チャットアプリです')

@section('content')
  <div id="app">
    <chat-app user-id="{{ session()->getId() }}" />
  </div>
@endsection
