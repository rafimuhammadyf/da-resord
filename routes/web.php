<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin1-resto2-user3

//landing | 123
Route::get('landing', function () {
	return view('Landing.landing');
});

//login | 123
Route::get('masuk', [LoginController::class, 'index']);
Route::post('masuk/cek', [LoginController::class, 'check']);
Route::get('keluar', [LoginController::class, 'logout']);

//register | 3
Route::get('daftar', function () {
	return view('Login.register');
});
Route::post('daftar_create', [UserController::class, 'store']);

//home3
Route::get('homepage', [HomeController::class, 'index']);

//dashboard12
Route::get('dashboard', [DashboardController::class, 'index1']);
Route::get('manage', [DashboardController::class, 'index2']);
 
//CRUD Menu12
Route::get('menu', [MenuController::class, 'index']);
Route::get('menu_create', function () {
	return view('Menu.menu_create');
});
Route::post('menu_store', [MenuController::class, 'store']);
Route::get('menu_edit/{id}', [MenuController::class, 'edit']);
Route::patch('menu_update/{id}', [MenuController::class, 'update']);
Route::delete('menu_destroy/{id}', [MenuController::class, 'destroy']);

//CRUD Meja12
Route::get('meja', [MejaController::class, 'index']);
Route::get('meja_create', function () {
	return view('Meja.meja_create');
});
Route::post('meja_store', [MejaController::class, 'store']);
Route::get('meja_edit/{id}', [MejaController::class, 'edit']);
Route::patch('meja_update/{id}', [MejaController::class, 'update']);
Route::delete('meja_destroy/{id}', [MejaController::class, 'destroy']);

//CRUD user1
Route::get('user', [UserController::class, 'index']);
Route::get('user_create', function () {
	return view('User.user_create');
});
Route::post('user_store', [UserController::class, 'stores']);
Route::get('user_edit/{id}', [UserController::class, 'edit']);
Route::patch('user_update/{id}', [UserController::class, 'update']);
Route::delete('user_destroy/{id}', [UserController::class, 'destroy']);

//Transit Keranjang123
Route::get('cart', [CartController::class, 'index']);
Route::post('cart_store', [CartController::class, 'store']);
Route::patch('cart_update/{id_menus}', [CartController::class, 'update']);
Route::delete('cart_destroy/{id_menus}', [CartController::class, 'destroy']);

//Pesanan 1RUD|2RU|3CR
Route::get('pesanan', [OrderController::class, 'index']);
Route::post('pesanan_store', [OrderController::class, 'store']);
Route::get('pesanan_edit/{id}', [OrderController::class, 'edit']);
Route::patch('pesanan_update/{id}', [OrderController::class, 'update']);
Route::delete('pesanan_destroy/{id}', [OrderController::class, 'destroy']);

Route::get('transaksi', [TransaksiController::class, 'index']);
Route::patch('transaksi_update/{id}', [TransaksiController::class, 'update']);
//profil
Route::get('profil', [ProfilController::class, 'pengguna']);
Route::get('resto', [ProfilController::class, 'resto']);
Route::get('admin', [ProfilController::class, 'admin']);

//daily_pdf_invoice123