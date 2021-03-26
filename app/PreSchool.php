<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreSchool extends Model
{
    use HasFactory;

    protected $table = 'pre_schools';

    protected $guarded = [
      'id'
    ];
}
