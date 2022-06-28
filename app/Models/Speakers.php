<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'fullname',
        'profile',
        'occupation',
        'facebook',
        'tweeter',
        'instagram',
        'ini',
    ];
}
