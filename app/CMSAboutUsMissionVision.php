<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMSAboutUsMissionVision extends Model
{
    use HasFactory;

    protected $table = 'c_m_s_about_us_mission_visions';

    protected $guarded = [
        'id',
    ];

//    protected $dates = [
//        'created_at',
//        'updated_at'
//    ]
}
