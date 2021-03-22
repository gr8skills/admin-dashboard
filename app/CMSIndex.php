<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMSIndex extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'c_m_s_indices';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $guarded = [
        'id',
    ];
}
