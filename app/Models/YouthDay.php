<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YouthDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'gender',
        'institution',
        'regionID',
        'guestToken',
    ];
}
