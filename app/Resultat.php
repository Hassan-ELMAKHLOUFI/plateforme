<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    //
    protected $table = "resultat";
    protected $fillable = ['note_total'];
    protected $primaryKey = 'resultat_id';

    public function reponse_qcm(){
        return $this->hasMany('App\Reponse_QCM');
    }
}
