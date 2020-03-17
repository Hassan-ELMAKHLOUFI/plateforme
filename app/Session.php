<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    protected $table="session";
    protected $fillable=['etudiant_id','test_id','username','password','active'];
    protected $primaryKey='session_id';

    public function etudiant(){
    return $this->hasMany('App\Etudiant','etudiant_id','etudiant_id');
}
    public function test(){
        return $this->hasOne('App\Test','test_id','test_id');
    }

}
