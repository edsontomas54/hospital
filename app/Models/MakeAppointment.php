<?php

namespace App\Models;

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
        'assigned_to_id',
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
        return $this->belongsTo(User::class,"user_id");
    }
}
