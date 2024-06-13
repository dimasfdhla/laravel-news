<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SiswaController;

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

Route::get('/show-data', function () {
    $bahasapemrograman = ['php', 'java', 'c', 'javascript', 'dart'];
    return ($bahasapemrograman);
});


Route::get('test', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabeldata', function () {
    $data = ['meja', 'kursi', 'pensil', 'pulpen', 'lampu'];
    return view('table', compact('data'));
});

Route::get('index', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('tabeldata', function () {
    $data = ['meja', 'kursi', 'pensil', 'pulpen', 'lampu'];
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class);

Route::post('siswa/store', [SiswaController::class, 'store']);
