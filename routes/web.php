<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        return view('welcome');
    });

    // Route::get('/permission', function () {
    //     return view('test-permission');
    // })->middleware('can:can-admin-or-default');

    // Route::get('/permission', function () {
    //     return view('test-permission');
    // })->middleware('can:admin');

    // Route::get('/welcome', function () {
    //     return view('test-permission');
    // })->middleware('can:default');

    //  Route::get('/test-permission', function () {
    //     return view('test-permission');
    // })->middleware('can:default');

    // Ao chamar essa rota concedida uma permissão ao usuário atual do sistema
    Route::get('/test-permission', PermissionController::class)->name('test-permission');

    Route::get('/permission', function () {
        return view('permission');
    });
});






