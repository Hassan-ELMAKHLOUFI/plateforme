<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text_libre extends Model
{
    //
    protected $table="text_libre";
    protected $fillable=['question_text','note'];
    protected $primaryKey='question_id';

    public function reponse_text(){
        return $this->hasMany('App\Reponse_text','question_id','question_id');
}
}
