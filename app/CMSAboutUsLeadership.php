<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMSAboutUsLeadership extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'c_m_s_about_us_leaderships';

    protected $guarded = [
        'id'
    ];
}
