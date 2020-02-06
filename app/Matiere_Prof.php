<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere_Prof extends Model
{
    protected $table="matiere_prof";
    protected $fillable=['cin','grade'];
    protected $primaryKey='id';
}
