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
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcaiClienteController;

Route::get('/', function () {
    return view('index');
});

//rotas para crição e registro de pedidos
Route::get('/calls', [CallController::class, 'create'])->name('pedidos');
Route::post('/calls', [CallController::class, 'store']);

//rotas referente ao administrador
Route::get('/dashboard', [adminController::class, 'create']);
Route::get('/dashboard/{id}', [adminController::class, 'update'])->name('update_call');
Route::get('users/admin/{user}', [UserController::class, 'superAdmin']);

//rotas para controle e perfil de usuários
Route::get('users', [UserController::class, 'index'])->name('perfil');
Route::get('users/show/{user}', [UserController::class, 'show'])->name('showPerfil');
Route::get('users/edit/{user}', [UserController::class, 'edit'])->name('editPerfil');
Route::post('users/update/{user}', [UserController::class, 'update'])->name('updatePerfil');

//rotas referentes da galeria de imagens da empresa
Route::get('visibility/index', [GaleriaController::class, 'index'])->name('galeria');
Route::get('visibility/create', [GaleriaController::class, 'create'])->name('galeriaCreate');
Route::post('visibility/store', [GaleriaController::class, 'store'])->name('galeriaStore');

//rotas referente ao cliente colocoar foto tomando nosso açaí
Route::post('visibility/store', [AcaiClienteController::class, 'store'])->name('acaiStore');

//auth do breeze
require __DIR__ . '/auth.php';