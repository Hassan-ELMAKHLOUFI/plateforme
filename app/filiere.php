<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    protected $table="filieres";
    protected $fillable=['nom','nombre_inscrit','id_departement'];
    protected $primaryKey='id_filiere';
    
}
