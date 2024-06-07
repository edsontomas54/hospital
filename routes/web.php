<?php

use App\Livewire\Admin\AdminLoginUser;
use App\Livewire\Admin\Dashboard;
use App\Livewire\AdminRegisterUser;
use App\Livewire\HomeComponent;
use App\Livewire\User\ViewAppointment;
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

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/', HomeComponent::class)->name('home.index');


Route::middleware(["auth",'is_admin'])->group(function (){
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/admin/register', AdminRegisterUser::class)->name('admin.register');
});

Route::get('/login', AdminLoginUser::class)->name('admin.login');

Route::middleware(["auth","is_patient"])->group(function (){

    Route::get('/appointment/list', ViewAppointment::class)->name('user.appointment');
    Route::get('/logout', [HomeComponent::class,'logout'])->name('home.logout');

});
