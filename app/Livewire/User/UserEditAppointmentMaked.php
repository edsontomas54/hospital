<?php

namespace App\Livewire\User;

use App\Enums\Status;
use App\Models\MakeAppointment;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;


class UserEditAppointmentMaked extends Component
{
    public $name;
    public $bi_number;
    public $appointment_date;
    public $preferred_time;
    public $appointment_type;
    public $specialty;
    public $gender;
    public $message;
    public $OID;
    public $appointment;



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


    public function mount($appointment_OID)
    {
        $this->OID = $appointment_OID;

        $this->appointment = MakeAppointment::find($this->OID);

        $this->name = $this->appointment->name;
        $this->bi_number = $this->appointment->bi_number;
        $this->appointment_date = $this->appointment->appointment_date;
        $this->preferred_time = $this->appointment->preferred_time;
        $this->appointment_type = $this->appointment->appointment_type;
        $this->specialty = $this->appointment->specialty;
        $this->gender = $this->appointment->gender;
        $this->message = $this->appointment->message;


        //convert to time
        $time= \Carbon\Carbon::createFromFormat('H:i:s', $this->preferred_time);
        $this->preferred_time= $time->format("H") .":". $time->format("s");


    }

    public function update()
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

        $appointment = MakeAppointment::find($this->OID);


        $appointment->name = $this->name;
        $appointment->bi_number = $this->bi_number;
        $appointment->appointment_date = $this->appointment_date;
        $appointment->preferred_time =$this->preferred_time;
        $appointment->appointment_type= $this->appointment_type ;
        $appointment->specialty = $this->specialty;
        $appointment->gender   = $this->gender;
        $appointment->status = Status::requested;
        $appointment->message = $this->message;

        $appointment->save();

        toastr()->success('Seu pedido de consulta foi actualizado com sucesso. Obrigado!','Actualizado');


    }

    public function render()
    {
        return view('livewire.user.user-edit-appointment-maked')
            ->layout(config('livewire.layoutUser'));
    }
}
