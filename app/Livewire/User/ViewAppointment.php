<?php

namespace App\Livewire\User;

use App\Enums\AppointmentType;
use App\Enums\Status;
use App\Models\MakeAppointment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ViewAppointment extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function changeStatus($id){
        $appointment = MakeAppointment::find($id);
        if($appointment->status == Status::requested){
            $appointment->status = Status::rejected;
            $appointment->save();

            toastr()->success("Pedido Cancelado");
        }

    }
    public function render()
    {
        $user = Auth::user();
        // $makeAppointments =  MakeAppointment::where('user_id',$user->id)
        // ->orderBy('appointment_date', 'ASC')
        // ->orderBy('preferred_time', 'ASC')
        // ->paginate(6);

        $urgentAppointments = MakeAppointment::where('appointment_type', AppointmentType::urgent)
        ->where('user_id',$user->id)
        ->where('status','!=', Status::concluded)
        ->with('user')
        ->orderBy('appointment_date', 'ASC')
        ->orderBy('preferred_time', 'ASC')
        ->get();

        $scheduledAppointments = MakeAppointment::where('appointment_type', AppointmentType::scheduled)
        ->where('user_id',$user->id)
        ->where('status','!=', Status::concluded)
        ->with('user')
        ->orderBy('appointment_date', 'ASC')
        ->orderBy('preferred_time', 'ASC')
        ->get();

        $walkInAppointments = MakeAppointment::where('appointment_type', AppointmentType::walk_in)
        ->where('user_id',$user->id)
        ->where('status','!=', Status::concluded)
        ->with('user')
        ->orderBy('appointment_date', 'ASC')
        ->orderBy('preferred_time', 'ASC')
        ->get();

         $appointments = $urgentAppointments->merge($scheduledAppointments)->merge($walkInAppointments);

         $concludedAppointments = MakeAppointment::where('status', Status::concluded)
         ->with('user')
         ->orderBy('appointment_date', 'ASC')
         ->orderBy('preferred_time', 'ASC')
         ->get();

         $appointments = $appointments->merge($concludedAppointments);


            //currently working version
           { $makeAppointments = MakeAppointment::with('user')
                ->orderBy('appointment_date', 'ASC')
                ->orderByRaw('CASE WHEN appointment_type = ? THEN 0 ELSE 1 END', [AppointmentType::urgent])
                ->orderBy('preferred_time', 'ASC')
                ->paginate(8);
            }

            $makeAppointments = $appointments->paginate(8);

        return view('livewire.user.view-appointments',compact('makeAppointments',))
        ->layout(config('livewire.layoutUser'));
    }
}
