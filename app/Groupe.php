<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    //
    protected $table="groupe";
    protected $fillable=['nombre_etudiant','test_id'];
    protected $primaryKey='groupe_id';



    public function etudiant(){
        return $this->belongsToMany('App\Etudiant','etudiant_groupe','groupe_id','etudiant_id');
    }

}
