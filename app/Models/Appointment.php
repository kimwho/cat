<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment'; 
    protected $primaryKey = 'appointmentID';
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorID'); // Assuming 'doctorID' is the foreign key in the appointments table
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'statusID'); // Assuming 'statusID' is the foreign key in the appointments table
    }
}
