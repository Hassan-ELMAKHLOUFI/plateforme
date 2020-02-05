<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    protected $table="filiere";
    protected $fillable=['nomf','cord','date_cr','date_fin'];
    protected $primaryKey='id_filiere';

}
