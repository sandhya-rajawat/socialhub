<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Admin extends Model
{
      use Notifiable;

    protected $table = 'admin'; 
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'contact_number',
         'profile_picture',
        'password',
        'status',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
