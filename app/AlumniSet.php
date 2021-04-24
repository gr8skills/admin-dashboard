<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlumniSet extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alumni_sets';

    protected $guarded = [
        'id'
    ];

    public function alumnis(){
        return $this->hasMany(Alumni::class, 'setId');
    }
}
