<?php

namespace App\Livewire;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class AdminRegisterUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $role;

public function register() {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];

        // Validator instance
        $validator = Validator::make([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->confirm_password,
        ], $rules);

        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                toastr()->error($message);
            }
            return;
        }

        // Create a new user instance
        $user = new User();

        // Assign properties
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->role = $this->role;
        $user->is_admin = $this->role == 'ADMIN' ? true : false;

        // Save the user to the database
        $user->save();

        // Optionally, you can flash a success message
        toastr()->success("User registered successfully");
    }


    public function render()
    {
        return view('livewire.admin-register-user')
        ->layout(config('livewire.layoutAdmin'));
    }
}
