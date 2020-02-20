<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    //
    protected $table="groupe";
    protected $fillable=['nombre_etudiant'];
    protected $primaryKey='groupe_id';



    public function etudiant(){
        return $this->hasMany('App\Etudiant','groupe_id','groupe_id');
    }
}
