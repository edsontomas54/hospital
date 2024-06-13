<?php

namespace App\Livewire\Admin;

use App\Enums\RoleEnum;
use App\Enums\Status;
use App\Models\MakeAppointment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public $deletedDoctorCount;
    public $totalDoctorCount;
    public $totalsAuthDoctor =[];
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->to('/'); // Redirect to the login page or home page
    }

    public function render()
    {

        $appointments = MakeAppointment::where('status',Status::concluded)->get();

        $statusTotals = [
            'requested' => $appointments->where('status', 'requested')->count(),
            'marked' => $appointments->where('status', 'marked')->count(),
            'concluded' => $appointments->where('status', 'concluded')->count(),
            'rejected' => $appointments->where('status', 'rejected')->count(),
        ];

        $appointmentTypeTotals = [
            'urgent' => $appointments->where('appointment_type', 'urgent')->count(),
            'scheduled' => $appointments->where('appointment_type', 'scheduled')->count(),
            'walk_in' => $appointments->where('appointment_type', 'walk_in')->count(),
        ];

        $specialtyTotals = [
            'WITHOUT_DOCTOR' => $appointments->where('doctor_id', '=',NULL)->count(),
            'Pediatrician' => $appointments->where('specialty', 'Pediatrician')->count(),
            'Dentist' => $appointments->where('specialty', 'Dentist')->count(),
            'Psychologist' => $appointments->where('specialty', 'Psychologist')->count(),
            'GeneralPractitioner' => $appointments->where('specialty', 'GeneralPractitioner')->count(),
            'Obstetrician' => $appointments->where('specialty', 'Obstetrician')->count(),
            'Prenatal' => $appointments->where('specialty', 'Prenatal')->count(),
        ];

        $users = User::all();

        $doctorsTotals = [
            'PediatricianDoc' => $users->where('specialty', 'Pediatrician')->count(),
            'DentistDoc' => $users->where('specialty', 'Dentist')->count(),
            'PsychologistDoc' => $users->where('specialty', 'Psychologist')->count(),
            'GeneralPractitionerDoc' => $users->where('specialty', 'GeneralPractitioner')->count(),
            'ObstetricianDoc' => $users->where('specialty', 'Obstetrician')->count(),
            'PrenatalDoc' => $users->where('specialty', 'Prenatal')->count(),
        ];

        //deleted doctors
        $this->deletedDoctorCount = DB::table('users')
        ->where('role', 'DOCTOR')
        ->whereNotNull('deleted_at')
        ->count();

        $this->totalDoctorCount = DB::table('users')
        ->where('role', 'DOCTOR')
        ->where('deleted_at',NULL)
        ->count();

        //Pending Doctor
        if(Auth::check() && Auth::user()->role==RoleEnum::DOCTOR){
            $this->totalsAuthDoctor =[
                'totalConcludedDoc' => $appointments->where('doctor_id', Auth::user()->id)->count(),
                'urgentDoc' => $appointments->where('appointment_type', 'urgent')->where('doctor_id', Auth::user()->id)->count(),
                'scheduledDoc' => $appointments->where('appointment_type', 'scheduled')->where('doctor_id', Auth::user()->id)->count(),
                'walk_inDoc' => $appointments->where('appointment_type', 'walk_in')->where('doctor_id', Auth::user()->id)->count(),

            ];
        }


        $user = Auth::user();
        return view('livewire.admin.dashboard', compact('user',
        'statusTotals', 'appointmentTypeTotals', 'specialtyTotals','appointments','doctorsTotals'
        ))->layout(config('livewire.layoutAdmin'));
    }
}
