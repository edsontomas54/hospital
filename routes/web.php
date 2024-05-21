<?php

use App\Livewire\Admin\AdminLoginUser;
use App\Livewire\Admin\Dashboard;
use App\Livewire\AdminRegisterUser;
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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

Route::get('/admin/register', AdminRegisterUser::class)->name('admin.register');

Route::get('/admin/login', AdminLoginUser::class)->name('admin.login');
