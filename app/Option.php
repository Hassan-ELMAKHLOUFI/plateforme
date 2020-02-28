<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Option extends Model implements ToModel, WithHeadingRow
{
    protected $table = "option";
    protected $fillable = ['option_text', 'point'];
    protected $primaryKey = 'option_id';
    //

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new option(array(
            'option_text' => $row['option_text'],
            'point' => $row['point'],

        ));
    }

    public function reponse_qcm(){
        return $this->hasMany('App\Option');
    }
}
