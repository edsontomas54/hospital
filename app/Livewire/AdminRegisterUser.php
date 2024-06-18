<?php

namespace App\Livewire;

use App\Enums\BloodTypeEnum;
use App\Enums\NurseSpecialtyEnum;
use App\Enums\RoleEnum;
use App\Enums\Specialty;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class AdminRegisterUser extends Component
{
    public $name;
    public $birthDay;
    public $gender;
    public $bI;
    public $address;
    public $phone;
    public $emergencyContact;
    public $email;
    public $password;
    public $confirm_password;
    public $role;

    //Patient
    public $allergies;
    public $medicines;
    public $bloodType;

    //doctor
    public $specialty;
    //nurse
    public $nurse;

    public function register() {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthDay' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'bI' => 'nullable|string|min:13',
            'address' => 'nullable|string',
            'phone' => 'required|string|min:9',
            'emergencyContact' => 'required|string|min:9',
            // Additional fields
            'allergies' => 'nullable|string',
            'medicines' => 'nullable|string',
            'bloodType' => 'nullable|in:A,B,AB,O',
            'specialty' => 'nullable|string',
            'nurse' => 'nullable|string',
        ];

        // Validator instance
        $validator = Validator::make([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->confirm_password,
            'birthDay' => $this->birthDay,
            'gender' => $this->gender,
            'bI' => $this->bI,
            'address' => $this->address,
            'phone' => $this->phone,
            'emergencyContact' => $this->emergencyContact,
            // Additional fields
            'allergies' => $this->allergies,
            'medicines' => $this->medicines,
            'bloodType' => $this->bloodType,
            'specialty' => $this->specialty,
            'nurse' => $this->nurse,
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

        // Assign additional properties
        $user->birthDay = $this->birthDay;
        $user->gender = $this->gender;
        $user->bI = $this->bI;
        $user->address = $this->address;
        $user->phone = $this->phone;
        $user->emergencyContact = $this->emergencyContact;
        // Additional fields
        $user->allergies = $this->allergies;
        $user->medicines = $this->medicines;
        $user->bloodType = $this->bloodType;
        $user->specialty = $this->specialty;
        $user->nurse = $this->nurse;

        // Save the user to the database
        $user->save();

        $this->reset();
        // Optionally, you can flash a success message
        toastr()->success("User registered successfully");
    }



    public function render()
    {
        $roles=[];
        if(Auth::check()){

        if(Auth()->user()->role=="NURSE"){
            $roles = [RoleEnum::PATIENT];
        }else{
            $roles = RoleEnum::getValues();
        }

        }else{
            $roles = RoleEnum::getValues();
        }
        $bloodTypes = BloodTypeEnum::getValues();
        $specialties = Specialty::getValues();
        $nurseSpecialties = NurseSpecialtyEnum::getValues();

        return view('livewire.admin-register-user',compact('roles',
        'bloodTypes','specialties','nurseSpecialties',
        ))
        ->layout(config('livewire.layoutAdmin'));
    }
}
