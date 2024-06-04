<?php

namespace App\Livewire\MakeAppoiment;

use App\Models\MakeAppointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class MakeAppoiment extends Component
{
     public $name;
    public $bi_number;
    public $appointment_date;
    public $preferred_time;
    public $appointment_type;
    public $specialty;
    public $gender;
    public $message;

    protected $rules = [
        'name' => 'required|min:4',
        'bi_number' => 'required|min:9',
        'appointment_date' => 'required|date',
        'preferred_time' => 'required',
        'appointment_type' => 'required',
        'specialty' => 'required',
        'gender' => 'required',
        'message' => 'nullable',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {

        $validator = Validator::make( [
            'name' => $this->name,
            'bi_number' => $this->bi_number,
            'appointment_date' => $this->appointment_date,
            'preferred_time' => $this->preferred_time,
            'appointment_type' => $this->appointment_type,
            'specialty' => $this->specialty,
            'gender' => $this->gender,
            'message' => $this->message,
        ],$this->rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                toastr()->error($message);
            }
            // return redirect()->back()->withErrors($validator)->withInput();
            return ;

        }

        try {

            $appointment = new MakeAppointment();
            $appointment->name = $this->name;
            $appointment->user_id = Auth()->user()->id;
            $appointment->bi_number = $this->bi_number;
            $appointment->appointment_date = $this->appointment_date;
            $appointment->preferred_time = $this->preferred_time;
            $appointment->appointment_type = $this->appointment_type;
            $appointment->specialty = $this->specialty;
            $appointment->gender = $this->gender;
            $appointment->message = $this->message;
            $appointment->save();

            $users = User::where('role', 'NURSE')->get();
            $timestamp = now();

            foreach ($users as $user) {
                $appointment->assignedUsers()->attach($user->id,['created_at' => $timestamp, 'updated_at' => $timestamp]);
            }


            session()->flash('message', 'Seu pedido de consulta foi enviado com sucesso. Obrigado!');
            $this->reset();

            toastr()->success('Seu pedido de consulta foi enviado com sucesso. Obrigado!');
        } catch (ValidationException $e) {
            foreach ($e->errors() as $error) {
                toastr()->error($error[0]);
            }
        }
    }

    public function render()
    {
        return view('livewire.make-appoiment.make-appoiment');
    }
}
