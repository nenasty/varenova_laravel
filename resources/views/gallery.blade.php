@extends('layouts.app')

@section('title', $article['name'])

@section('content')
    <a class="back-link" href="{{ route('home') }}">← Назад к новостям</a>

    <h1>{{ $article['name'] }}</h1>
    <span class="article-date">{{ $article['date'] }}</span>

    <img class="full-image" src="{{ asset('images/' . $article['full_image']) }}" alt="{{ $article['name'] }}">

    <p>{{ $article['desc'] }}</p>
@endsection