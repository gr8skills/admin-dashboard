<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipalDaySchool extends Model
{
    use HasFactory;

    protected $table = 'principal_day_schools';

    protected $guarded = [
        'id'
    ];

    protected $dates = [
      'created_at'
    ];
}
