<?php

use App\Http\Controllers\RegistrationSuccess;
use App\Livewire\LoginForm;
use App\Livewire\RegistrationForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
Route::get('/registration', RegistrationForm::class)->name('registration');
Route::get('/registration/{registration:registration_number}', RegistrationSuccess::class)->name('registration.success');
Route::get('login', LoginForm::class)->name('login');
Route::get('logout', function () {
    Auth::logout();

    return redirect()->route('login');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
