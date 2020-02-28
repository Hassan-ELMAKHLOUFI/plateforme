<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse_QCM extends Model
{
    //
    protected $table="reponse_qcm";
    protected $fillable=[];
    protected $primaryKey='reponse_id';

    public function qcm(){
        return $this->hasOne('App\QCM');
    }

}
