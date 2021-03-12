<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

class SiteSettings extends Model
{
    use HasFactory, Notifiable;

    public $table = 'site_settings';

    protected $dates = [
        'updated_at',
        'created_at',
    ];

    protected $casts = [];

    protected $fillable = [
      'school_name',
      'school_email',
      'school_phone1',
      'school_phone2',
      'school_phone3',
      'school_address1',
        'school_address2',
        'school_logo',
        'quick_links',
        'facebook',
        'instagram',
        'twitter',
        'copyright_year',
    ];

    public function sendCoreSettingsNotification($msg)
    {
        $this->notify(new Notification());
    }




}
