<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users', \App\Livewire\Users\Users::class);
    Route::get('categories',  \App\Livewire\Categories\Categories::class);
    Route::get('create-category', \App\Livewire\Categories\CreateCategory::class);
    Route::get('update-category/{category}', \App\Livewire\Categories\UpdateCategory::class);
    Route::get('view-category/{category}', \App\Livewire\Categories\ViewCategory::class);
    Route::get('products', \App\Livewire\Products\Products::class);
});
