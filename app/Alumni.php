<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';

    protected $guarded = [
        'id'
    ];

    public function set(){
        return $this->belongsTo(AlumniSet::class, "setId");
    }
}
