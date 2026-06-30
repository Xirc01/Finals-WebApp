<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{

    protected $fillable =[
        'userId',
        'membershipPlanId',
        'startDate',
        'endDate',
        'membershipStatus',
    ];    

    /** @use HasFactory<\Database\Factories\MembershipFactory> */
    use HasFactory;
}
