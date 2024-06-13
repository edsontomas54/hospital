<?php

namespace App\Livewire\Admin;

use App\Enums\Status;
use App\Models\MakeAppointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditAppointmentsComponent extends Component
{
    public $app_id;
    public $date;
    public $preferred_time;
    public $status;
    public $assignToDoctor;
    public $appointment;
    public $user;

    public function mount($app_id){
        $this->app_id = $app_id;
        $this->user = Auth::user();

        $this->appointment=MakeAppointment::find($this->app_id);

        $this->date =$this->appointment->appointment_date;
        $this->preferred_time =$this->appointment->preferred_time;
        $this->status =$this->appointment->status;
        $this->assignToDoctor =$this->appointment->doctor_id;


        //convert to time
        $time= \Carbon\Carbon::createFromFormat('H:i:s', $this->preferred_time);
        $this->preferred_time= $time->format("H") .":". $time->format("s");


    }

    public function updateAppointment(){
        $this->appointment = MakeAppointment::find($this->app_id);
        $this->appointment->appointment_date = $this->date;
        $this->appointment->preferred_time = $this->preferred_time;
        $this->appointment->status = $this->status;
        $this->appointment->doctor_id = $this->assignToDoctor;
        $this->appointment->save();
        toastr()->success('Agendamento atualizado com sucesso', 'Atualizado com sucesso');

    }
    public function render()
    {
        $makeAppointment = MakeAppointment::with('user')->find($this->app_id);

        $doctors= User::getUsersBySpecialty($makeAppointment->specialty);

        return view('livewire.admin.edit-appointments-component',compact('makeAppointment','doctors'))
        ->layout(config('livewire.layoutAdmin'));
    }
}
