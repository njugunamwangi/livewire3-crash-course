<?php

use App\Livewire\CreatePost;
use App\Livewire\EditPost;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('posts/create', CreatePost::class);
Route::get('posts/{post}/edit', EditPost::class);
