<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutheController;
use App\Http\Controllers\AddAdminController;
use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListAdminController;
use App\Http\Controllers\ListTryoutController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\RiwayatPembelianController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TryoutController;
use App\Http\Controllers\BalanceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('addAdmin', AddAdminController::class);
// Route::resource('bankSoal', BankSoalController::class);
// Route::resource('/', BerandaController::class);
// Route::resource('home', HomeController::class);
// Route::resource('listAdmin', ListAdminController::class);
// Route::resource('listUser', ListUserController::class);
// Route::resource('login', LoginController::class);
// Route::resource('pembayaran', PembayaranController::class);
// Route::resource('pembelian', PembelianController::class);
// Route::resource('profile', ProfileController::class);
// Route::resource('profileAdmin', ProfileAdminController::class);
// Route::resource('question', QuestionController::class);
// Route::resource('registration', RegistrationController::class);
// Route::resource('tryout', TryoutController::class);


Route::get('maintenance', [MaintenanceController::class, 'index'])->name('maintenance');

Route::middleware(['guest'])->group(function () {
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::get('/login', [AutheController::class, 'getLogin'])->name('login');
    Route::post('/login', [AutheController::class, 'postLogin']);
    Route::get('/registration', [AutheController::class, 'getRegistration'])->name('registration');
    Route::post('/registration', [AutheController::class, 'postRegistration']);
});

Route::middleware(['auth:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AutheController::class, 'logout'])->name('logout');
    Route::get('/pembayaran', [PembayaranController::class, 'show'])->name('pembayaran');
    Route::post('/pembayaran', [PembayaranController::class, 'store']);
    Route::get('/riwayatPembelian', [RiwayatPembelianController::class, 'index'])->name('riwayatPembelian');
    Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian');
    Route::get('/bankSoal', [BankSoalController::class, 'index'])->name('bankSoal');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::patch('/profile/{profile}', [ProfileController::class, 'update']);
    Route::get('/balance', [BalanceController::class, 'index'])->name('balance');
    Route::patch('/balance', [BalanceController::class, 'update']);
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/addAdmin', [AddAdminController::class, 'index'])->name('addAdmin');
    Route::post('/addAdmin', [AddAdminController::class, 'store']);
    Route::get('/listAdmin', [ListAdminController::class, 'index'])->name('listAdmin');
    Route::patch('/listAdmin/{listAdmin}', [ListAdminController::class, 'update']);
    Route::delete('/listAdmin/{listAdmin}', [ListAdminController::class, 'destroy']);
    Route::get('/listUser', [ListUserController::class, 'index'])->name('listUser');
    Route::patch('/listUser/{listUser}', [ListUserController::class, 'update']);
    Route::delete('/listUser/{listUser}', [ListUserController::class, 'destroy']);
    Route::get('/logoutAdmin', [AutheController::class, 'logout'])->name('logoutAdmin');
    Route::get('/profileAdmin', [ProfileAdminController::class, 'edit'])->name('profileAdmin');
    Route::patch('/profileAdmin/{profileAdmin}', [ProfileAdminController::class, 'update']);
    Route::get('/question', [QuestionController::class, 'index'])->name('question');
    Route::get('/tryout', [TryoutController::class, 'index'])->name('tryout');
    Route::post('/tryout', [TryoutController::class, 'store']);
    Route::get('/listTryout', [ListTryoutController::class, 'index'])->name('listTryout');
    Route::patch('/listTryout/{listTryout}', [ListTryoutController::class, 'update']);
    Route::delete('/listTryout/{listTryout}', [ListTryoutController::class, 'destroy']);
});