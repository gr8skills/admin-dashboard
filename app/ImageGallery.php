<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;

    protected $table = 'image_galleries';

    protected $guarded = [
        'id'
        ];
}
