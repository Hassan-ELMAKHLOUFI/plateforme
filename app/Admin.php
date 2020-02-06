<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table="admin";
    protected $fillable=['cin','nom','prenom','mot_de_pass'];
    protected $primaryKey='id';
}
