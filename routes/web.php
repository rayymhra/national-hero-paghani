<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PahlawanController;

Route::get('/', function () {
    return redirect()->route('pahlawans.index');
});

Route::resource('pahlawans', PahlawanController::class);