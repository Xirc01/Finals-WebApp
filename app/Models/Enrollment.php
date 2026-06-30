<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{

    protected $fillable =[
        'userId',
        'programId',
        'coachCenrollmentDateontact',
        'enrollmentStatus'
    ];

    /** @use HasFactory<\Database\Factories\MembershipPlanFactory> */
    use HasFactory;
}
