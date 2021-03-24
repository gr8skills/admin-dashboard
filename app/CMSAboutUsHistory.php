<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMSAboutUsHistory extends Model
{
    use HasFactory;

    protected $table = 'c_m_s_about_us_histories';

    protected $guarded = [
      'id',
    ];
}
