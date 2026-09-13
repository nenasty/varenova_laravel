<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <nav>
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('about') }}">О нас</a>
        <a href="{{ route('contacts') }}">Контакты</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>Варенова Анастасия, группа 251-321</p>
</footer>
    
</body>
</html>