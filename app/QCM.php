<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QCM extends Model implements ToModel, WithHeadingRow
{
    protected $table="qcm";
    protected $fillable=['test_id','question_text','note','difficulty'];
    protected $primaryKey='question_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new QCM(array(
            'type'     => $row['type'],
            'question_text'=> $row['question_text'],
            'note'=>$row['note'],
            'test_id'=> $row['test_id'],
            'difficulty' => $row['difficulty']

        ));
    }
    public function options(){
        return $this->hasMany('App\Option','question_id');
    }
    public function test(){
        return $this->belongsTo('App\Test','test_id','test_id');
    }
}
