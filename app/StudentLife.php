<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLife extends Model
{
    use HasFactory;

    protected $dates = [

    ];
    protected $guarded = ['id'];

    protected $table = 'student_lives';

}
