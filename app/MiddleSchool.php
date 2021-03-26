<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiddleSchool extends Model
{
    use HasFactory;

    protected $table = 'middle_schools';

    protected $guarded = [
        'id',
    ];

    protected $casts = [

    ];
}
