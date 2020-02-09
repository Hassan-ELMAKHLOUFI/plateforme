<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    protected $table="filiere";
    protected $fillable=['nom','coordinateur','datedebut','datefin','id_departement'];
    protected $primaryKey='id_filiere';

}
