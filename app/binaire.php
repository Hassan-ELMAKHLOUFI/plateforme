<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binaire extends Model
{
    protected $table="binaire";
    protected $fillable=['test_id','question_text','note','difficulty'];
    protected $primaryKey='binaire_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new binaire(array(
            'question_text'=>$row['question_text'],
            'note'=>$row['note'],
            'test_id'=> $row['test_id'],));
    }
    public function options(){
        return $this->hasMany('App\Option','binaire_id');
    }
    public function test(){
        return $this->belongsTo('App\Test','test_id','test_id');
    }
}
