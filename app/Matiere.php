<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $table="matiere";
    protected $fillable=['nom_matiere','id_module','volume_horaire'];
    protected $primaryKey='id_math';
}
