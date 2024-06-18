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
        $makeAppointments =  MakeAppointment::where('user_id',$user->id)->orderBY
        ('created_at','desc')->paginate(6);

        return view('livewire.user.view-appointments',compact('makeAppointments',))
        ->layout(config('livewire.layoutUser'));
    }
}
