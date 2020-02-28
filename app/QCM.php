<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QCM extends Model implements ToModel, WithHeadingRow
{
    protected $table="QCM";
    protected $fillable=['type'];
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

        ));
    }

    public function question(){
        return $this->hasMany('App\Option');
    }

    public function reponse_qcm(){
        return $this->hasOne('App\Reponse_QCM');
    }
}
