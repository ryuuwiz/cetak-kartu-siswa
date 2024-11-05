<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/cetak/{id}', \App\Livewire\CetakKartuOne::class)->name('cetak-kartu-one')->middleware('auth');

Route::get('/cetak', \App\Livewire\CetakSemua::class)->name('cetak-semua')->middleware('auth');
