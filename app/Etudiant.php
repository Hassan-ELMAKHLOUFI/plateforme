<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table="Etudiant";
    protected $fillable=['cin','cne','nom','prenom','email','password','numero','numero_apologie'];
    protected $primaryKey='id';
}
