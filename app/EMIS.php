<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EMIS extends Model
{
    use HasFactory;

    protected $table = 'e_m_i_s';

    protected $guarded = [
        'id'
    ];

}
