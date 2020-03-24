<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse_QCM extends Model
{
    //
    protected $table="reponse_qcm";
    protected $fillable=['option_id','etudiant_id'];
    protected $primaryKey='reponse_id';










}
