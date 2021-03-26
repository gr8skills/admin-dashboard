<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementarySchool extends Model
{
    use HasFactory;

    protected $table = 'elementary_schools';

    protected $guarded = [
      'id',
    ];
}
