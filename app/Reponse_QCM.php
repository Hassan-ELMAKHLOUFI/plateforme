<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse_QCM extends Model
{
    //
    protected $table="reponse_qcm";
    protected $fillable=['session_id','option_id','test_id','question_id','note'];
    protected $primaryKey='reponse_id';

}
