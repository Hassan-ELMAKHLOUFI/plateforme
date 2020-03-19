<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends model
{

    protected $guard = 'admin';
    protected $table="admin";
    protected $fillable=['cin','nom','prenom','username','email_address','password'];
    protected $primaryKey='id';


    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new Admin(array(
            'cin'     => $row['cin'],
            'nom'    => $row['nom'],
            'prenom'    => $row['prenom'],
            'username'    => $row['username'],
            'email_address'    => $row['email_address'],
            'password'    => $row['password'],
        ));
    }
}
