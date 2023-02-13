<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

use App\Http\Controllers\CallController;
use App\Http\Controllers\adminController;
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
    return view('index');
});

//rotas para crição e registro de pedidos
Route::get('/calls', [CallController::class, 'create']);
Route::post('/calls', [CallController::class, 'store']);

Route::get('/dashboard', [adminController::class, 'create']);
Route::get('/dashboard/{id}', [adminController::class, 'update'])->name('update_call');


Route::get('users', [UserController::class, 'index'])->name('perfil');
Route::get('users/show/{user}', [UserController::class, 'show'])->name('showPerfil');
Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('editPerfil');
Route::post('users/update/{user}', [UserController::class, 'update'])->name('updatePerfil');

Route::get('users/admin/{user}', [UserController::class, 'superAdmin']);

require __DIR__ . '/auth.php';