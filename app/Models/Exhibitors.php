<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitors extends Model
{
    use HasFactory;
    protected $fillable = [
        'exhibitorsname',
        'picture'
    ];
}
