<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class departement extends Model implements ToModel, WithHeadingRow
{



    protected $table="departement";
    protected $fillable=['nom','date_cr','chef','date_fin'];
    protected $primaryKey='departement_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     * @throws \Exception
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new departement(array(
            'nom'     => $row['nom'],
            'chef'    => $row['chef'],
            'date_cr'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_cr']),
            'date_fin'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_fin']),
        ));
    }

    public function filiere(){
        return $this->hasMany('App\filiere');
    }

    public function professeur(){
        return $this->hasMany('App\Professeur');
    }

}
