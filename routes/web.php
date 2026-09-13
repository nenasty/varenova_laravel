<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/gallery/{id}', [MainController::class, 'gallery'])->name('gallery');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    $contacts = [
        ['type' => 'Телефон', 'value' => '+7 (999) 123-45-67'],
        ['type' => 'Email', 'value' => 'varenova@example.com'],
        ['type' => 'Telegram', 'value' => '@nenasty'],
        ['type' => 'Адрес', 'value' => 'Москва, ул. Большая Семёновская, 38'],
    ];

    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');