<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PahlawanController;

// Route untuk beranda
Route::get('/', function () {
    $pahlawans = \App\Models\Pahlawan::orderBy('nama_pahlawan')->paginate(8);
    $totalPahlawans = \App\Models\Pahlawan::count();
    $uniqueRegions = \App\Models\Pahlawan::select('daerah')->distinct()->count();
    $latestAdded = \App\Models\Pahlawan::latest()->first();
    
    return view('home', compact('pahlawans', 'totalPahlawans', 'uniqueRegions', 'latestAdded'));
})->name('home');

// Route untuk CRUD pahlawan
Route::resource('pahlawans', PahlawanController::class);