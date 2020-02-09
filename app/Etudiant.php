<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table="etudiant";
    protected $fillable=['cin','id_niveau','cne','nom','prenom','email_address','username','password','numero','num_apologie'];
    protected $primaryKey='id';
}
