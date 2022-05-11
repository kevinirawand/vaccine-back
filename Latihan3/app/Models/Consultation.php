<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';

    protected $fillable = [
        'disease_history',
        'current_symptoms',
        'status',
        'doctor_notes',
        'doctor'
    ];


    // protected $attributes = [
    //     'doctor' => '{
    //         "Dr. Indrawan"
    //     }'
    // ];
}
