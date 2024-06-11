<?php

namespace App\Models;

use App\Enums\AppointmentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MakeAppointment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'doctor_id',
        'bi_number',
        'appointment_date',
        'preferred_time',
        'appointment_type',
        'specialty',
        'gender',
        'message',
        'status',
    ];


    public function assignedUsers()
    {
        return $this->belongsToMany(User::class, 'make_appointment_users');
    }

    public function user()
    {
        return $this->belongsTo(User::class,"user_id",);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class,"doctor_id",);
    }

    public function getAllUrgentAppointment(){
        return $this->urgentAppointments = self::where('appointment_type',AppointmentType::urgent)
        ->orderBy('created_at', 'DESC')->get();
    }
}
