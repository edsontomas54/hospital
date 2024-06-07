<?php

namespace App\Livewire\User;

use App\Enums\AppointmentType;
use App\Enums\Status;
use App\Models\MakeAppointment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewAppointment extends Component
{
    public function render()
    {
        $user = Auth::user();
        $makeAppointments =  MakeAppointment::where('user_id',$user->id)->get();

        return view('livewire.user.view-appointments',compact('makeAppointments',))
        ->layout(config('livewire.layoutUser'));
    }
}
