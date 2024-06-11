<?php
namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ForGotPassword extends Component
{
    public $email;
    public $password;
    public $confirmPassword;

    public function resetPassword()
    {
        // Validation rules
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ];

        // Validator instance
        $validator = Validator::make([
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->confirmPassword,
        ], $rules);

        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                toastr()->error($message);
            }
            return;
        }

        // Find the user by email
        $user = User::where('email', $this->email)->first();

        if (!$user) {
            toastr()->error('Coloque um email Valido.');
            return;
        }

        // Update the user's password
        $user->password = Hash::make($this->password);
        $user->save();

        toastr()->success('Recuperou A senha com Successo.');

        $credentials=[
            'email'=>$this->email,
            'password'=>$this->password
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
        return view('livewire.user.for-got-password')
            ->layout(config('livewire.layoutAdmin'));
    }
}
