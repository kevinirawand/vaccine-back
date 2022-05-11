<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    protected $table = 'spots';

    protected $fillable = [
        'name',
        'address',
        'serve',
        'capacity',
        'avaible_vaccines'
    ];

    protected $casts = [
        'avaible_vaccines' => 'array'
    ];

    protected $attributes = [
        'avaible_vaccines' => '{
            "Sinovac": true,
            "AstraZeneca": false,
            "Moderna": true,
            "Pfizer": true,
            "Sinnopharm": false
        }'
    ];
}
