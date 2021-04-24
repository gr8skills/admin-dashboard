<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequentlyAskedQuestion extends Model
{
    use HasFactory;

    protected $table = 'frequently_asked_questions';

    protected $guarded = [
        'id'
    ];
}
