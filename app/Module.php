<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table="module";
    protected $fillable=['id_module','nom_module'];
    protected $primaryKey='id_module';
}
