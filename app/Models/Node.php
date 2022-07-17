<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'num_users',
        'crowd_status_id',
        'floor',
        'simulation_1',
        'simulation_2',
        'simulation_3',
        'co2_crowd_level',
        'co2',
    ];
}
