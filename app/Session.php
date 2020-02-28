<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected $table="session";
    protected $fillable=['nom_utilisateur','mot_passe'];
    protected $primaryKey='session_id';

    public function etudiant(){
        return $this->hasMany('App\Etudiant','etudiant_id','etudiant_id');
    }


}
