<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerFixed extends Model
{
    use HasFactory;

    protected $table = 'career_fixeds';

    protected $guarded = ['id'];
}
