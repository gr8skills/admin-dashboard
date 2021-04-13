<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainMenu extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'main_menus';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'link',
        'alias',
        'visibility',
        'position'
    ];

    public function submenu(){
        $this->hasMany(SubMenu::class, 'menu_id');
    }

}
