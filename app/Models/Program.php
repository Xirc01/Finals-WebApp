<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    protected $fillable =[
        'coachId',
        'programName',
        'programDescription',
    ];

    /** @use HasFactory<\Database\Factories\MembershipPlanFactory> */
    use HasFactory;
}
