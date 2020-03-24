<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse_text extends Model
{
    //
    protected $table="reponse_text";
    protected $fillable=['fichier'];
    protected $primaryKey='reponse_text_id';
}
