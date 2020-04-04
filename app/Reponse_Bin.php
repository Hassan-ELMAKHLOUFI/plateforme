<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse_Bin extends Model
{
    //
    protected $table="reponse_bin";
    protected $fillable=['session_id','option_id','test_id','binaire_id','note'];
    protected $primaryKey='reponse_id';
}
