<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildProtection extends Model
{
    use HasFactory;

    protected $table = 'child_protections';

    protected $guarded = [
        'id'
    ];


}
