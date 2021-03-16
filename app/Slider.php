<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;

    public $table = 'sliders';

    protected $dates = [
        'updated_at',
        'created_at',
//        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'alt',
        'location',
        'type',
        'position',
    ];
}
