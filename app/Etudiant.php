<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table="Etudiant";
    protected $fillable=['cin','cne','nom','prenom','mot_de_pass','numero','numero_apologie'];
    protected $primaryKey='id';
}
