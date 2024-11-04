<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/cetak/{id}', \App\Livewire\CetakKartuOne::class)->name('cetak-kartu-one')->middleware('auth');
