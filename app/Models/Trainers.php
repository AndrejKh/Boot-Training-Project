<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'email',
        'location',
        'mobile',
        'photo',
        'courses',
        'qualifications',
    ];
}
