<?php

namespace App\Livewire\Admin;

use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLoginUser extends Component
{
    public $email;
    public $password;


    public function mount(){
        if(Auth::check()){
            Auth::logout();
            session()->invalidate();
            session()->regenerateToken();

            return redirect(route('admin.login'));
        }
    }


    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication successful
            toastr()->success( 'Login feito com ucesso','Sucesso');
            return redirect()->to('/admin/dashboard'); // Redirect to dashboard or intended page
        }

        // Authentication failed
        toastr()->error( 'E-mail ou senha inválida.','Erro de Autenticação');
    }

    public function render()
    {
        return view('livewire.admin.admin-login-user')
        ->layout(config('livewire.layoutAdmin'));
    }
}
