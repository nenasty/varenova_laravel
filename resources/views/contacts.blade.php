@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Контакты</h1>
    <p>Свяжитесь со мной любым удобным способом:</p>

    <ul class="contact-list">
        @foreach ($contacts as $contact)
            <li><strong>{{ $contact['type'] }}:</strong> {{ $contact['value'] }}</li>
        @endforeach
    </ul>
@endsection