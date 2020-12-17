<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use Notifiable;

    protected $table = "admins";

    protected $primaryKey = "id";

    protected $guard = 'manager';

    protected $fillable = [
        'name', 'email', 'nip','departement', 'password','email_verfied_at'
    ];

    protected $hidden = ['password'];
}
