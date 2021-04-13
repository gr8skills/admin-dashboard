<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $table = 'sub_menus';

    protected $guarded = ['id'];

    public function menu(){
        $this->belongsTo(MainMenu::class, 'id');
    }
}
