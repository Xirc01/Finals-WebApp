<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingFee extends Model
{

    protected $fillable =[
        'programId',
        'trainingFee'
    ];

    /** @use HasFactory<\Database\Factories\MembershipPlanFactory> */
    use HasFactory;
}