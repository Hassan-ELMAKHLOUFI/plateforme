<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $table="professeur";
    protected $fillable=['cin','nom','prenom','email','password','grade'];
    protected $primaryKey='id';
}
