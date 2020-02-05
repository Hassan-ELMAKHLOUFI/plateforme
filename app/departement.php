<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    protected $table="departements";
    protected $fillable=['nom','date_cr','chef'];
    protected $primaryKey='id_dep';
}
