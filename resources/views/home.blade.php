@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <h1>Новости</h1>

    <div class="articles">
        @foreach ($articles as $id => $article)
            <article class="article-card">
                <a href="{{ route('gallery', $id) }}">
                    <img src="{{ asset('images/' . $article['preview_image']) }}" alt="{{ $article['name'] }}">
                </a>

                <div class="article-body">
                    <span class="article-date">{{ $article['date'] }}</span>
                    <h2>{{ $article['name'] }}</h2>
                    <p>{{ $article['shortDesc'] ?? Str::limit($article['desc'], 100) }}</p>
                    <a class="article-link" href="{{ route('gallery', $id) }}">Подробнее</a>
                </div>
            </article>
        @endforeach
    </div>
@endsection