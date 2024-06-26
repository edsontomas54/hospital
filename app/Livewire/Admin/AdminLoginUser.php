<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLoginUser extends Component
{
    public $email;
    public $password;


    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication successful
            toastr()->success( 'Login success.');
            return redirect()->to('/admin/dashboard'); // Redirect to dashboard or intended page
        }

        // Authentication failed
        toastr()->error( 'Invalid email or password.');
    }

    public function render()
    {
        return view('livewire.admin.admin-login-user')
        ->layout(config('livewire.layoutAdmin'));
    }
}
