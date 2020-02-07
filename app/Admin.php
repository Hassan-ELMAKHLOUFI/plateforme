<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $table="admin";
    protected $fillable=['cin','nom','prenom','username','email'];
    protected $primaryKey='id';

    protected $hidden = [
        'mot_de_pass', 'remember_token',
    ];
}
