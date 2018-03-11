<?php

namespace DLG;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Model
{
    use Notifiable;

    protected $table = 'users';
    
    protected $fillable = [
        'fname',
        'lname',
        'username',
        'password',
        'mobile',
        'address',
        'access',
        'remember_token',
        'last_login'
    ];

    protected $hidden = [
        'password',
    ];
}