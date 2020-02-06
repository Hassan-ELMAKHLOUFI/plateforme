<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $table="niveau";
    protected $fillable=['nom'];
    protected $primaryKey='id';
}
