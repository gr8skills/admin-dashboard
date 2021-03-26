<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighSchool extends Model
{
    use HasFactory;

    protected $table = 'high_schools';

    protected $guarded = [
        'id'
    ];

    protected $casts = [

    ];
}
