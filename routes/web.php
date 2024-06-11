<?php

use App\Livewire\Admin\AdminLoginUser;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\DeleteUserComponent;
use App\Livewire\Admin\EditAppointmentsComponent;
use App\Livewire\Admin\UsersComponent;
use App\Livewire\Admin\ViewAppointmentComponent;
use App\Livewire\AdminRegisterUser;
use App\Livewire\HomeComponent;
use App\Livewire\ReportsPdf\UserServicePassword;
use App\Livewire\User\ForGotPassword;
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
Route::get('/login', AdminLoginUser::class)->name('admin.login');
Route::get('/logout', [HomeComponent::class,'logout'])->name('home.logout');
Route::get('/forgotpassword', ForGotPassword::class)->name('home.forgot.password');




Route::middleware(["auth",'is_employee'])->group(function (){
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/update-availability', [UsersComponent::class, 'updateAvailability'])->name('update-availability');
    });


Route::middleware(["auth",'is_nurse'])->group(function (){
    Route::get('/admin/register', AdminRegisterUser::class)->name('admin.register');
    });

Route::middleware(["auth",'can_see_appointment'])->group(function (){
    Route::get('/admin/view/appointments', ViewAppointmentComponent::class)->name('admin.view.appointments');
    Route::get('/admin/view/appointment/edit/{app_id}', EditAppointmentsComponent::class)->name('admin.view.appointment.edit');
});


Route::middleware(["auth","is_patient"])->group(function (){
    Route::get('/appointment/list', ViewAppointment::class)->name('user.appointment');
    Route::get('/appointment/list/download/service/password/{Oid}', [UserServicePassword::class,'downloadPDF'])->name('user.appointment.download.service.password');
});

Route::middleware(["auth",'is_admin'])->group(function (){
    Route::get('/admin/view/users', UsersComponent::class)->name('admin.view.users');
});

