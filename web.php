<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Baris ini penting!

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ini adalah route yang benar untuk menghubungkan URL /profil ke Controller
Route::get('/profil', [ProfileController::class, 'show']);
// ... (use statements lain)
use App\Http\Controllers\ContactController;

// ... (route lain yang sudah ada)

// Route untuk MENAMPILKAN form kontak (method GET)
Route::get('/kontak', [ContactController::class, 'showForm']);

// Route untuk MEMPROSES data dari form (method POST)
Route::post('/kontak', [ContactController::class, 'processForm']);