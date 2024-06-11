<?php

namespace App\Livewire\Admin;

use App\Enums\AppointmentType;
use App\Enums\RoleEnum;
use App\Enums\Status;
use App\Models\MakeAppointment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ViewAppointmentComponent extends Component
{
    use WithPagination;

    public $urgentAppointments;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $text = "";
        $user = Auth::user();


        if ($user->role != RoleEnum::DOCTOR) {
            $text = "Total de Marcações!";

            // Fetch and sort appointments
            $urgentAppointments = MakeAppointment::where('appointment_type', AppointmentType::urgent)
                ->where('status','!=', Status::concluded)
                ->with('user')
                ->orderBy('appointment_date', 'ASC')
                ->orderBy('preferred_time', 'ASC')
                ->get();

            $scheduledAppointments = MakeAppointment::where('appointment_type', AppointmentType::scheduled)
                ->where('status','!=', Status::concluded)
                ->with('user')
                ->orderBy('appointment_date', 'ASC')
                ->orderBy('preferred_time', 'ASC')
                ->get();

            $walkInAppointments = MakeAppointment::where('appointment_type', AppointmentType::walk_in)
                ->where('status','!=', Status::concluded)
                ->with('user')
                ->orderBy('created_at', 'DESC')
                ->get();

            $appointments = $urgentAppointments->merge($scheduledAppointments)->merge($walkInAppointments);

            // Fetch concluded appointments and merge them at the end
            $concludedAppointments = MakeAppointment::where('status', Status::concluded)
                ->with('user')
                ->orderBy('created_at', 'DESC')
                ->get();

            $appointments = $appointments->merge($concludedAppointments);
        } elseif ($user->role == RoleEnum::DOCTOR) {
            $appointments = MakeAppointment::where('doctor_id', $user->id)
                ->where('status', Status::marked)
                ->with('user')
                ->orderBy('appointment_date', 'ASC')
                ->orderBy('preferred_time', 'ASC')
                ->get();
            $text = "Total de Consultas alocadas a si!";
        }

        // Paginate the merged collection
        $paginatedAppointments = $this->paginateCollection($appointments, 6);

        return view('livewire.admin.view-appointments-component', [
            'appointments' => $paginatedAppointments,
            'text' => $text,
        ])->layout(config('livewire.layoutAdmin'));
    }

    // Helper function to paginate a Laravel Collection
    private function paginateCollection($collection, $perPage)
    {
        $page = request()->get('page', 1);
        // $offset = ($page - 1) * $perPage;
        $offset = max(0, ($page - 1) * $perPage);


        return new \Illuminate\Pagination\LengthAwarePaginator(
            $collection->slice($offset, $perPage),
            $collection->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    }
}
