<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" itemprop="description" content="@yield('description')">
  <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
  <title>@yield('title') | cocolabo chat</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<header>

</header>

<main>
  @yield('content')
</main>

<footer>

</footer>

<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
