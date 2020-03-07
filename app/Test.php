<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Test extends Model implements ToModel, WithHeadingRow
{

    protected $table = "test";
    protected $fillable = ['nom','duree','salle','date','note','description'];
    protected $primaryKey = 'test_id';

    public function model(array $row)
    {

        return new Test(array(
            'nom' => $row['nom'],
            'note' => $row['note'],
            'duree' => $row['duree'],
            'salle' => $row['salle'],
            'description' => $row['description'],
            'date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date'])
        ));
    }

    public function session(){
        return $this->hasMany('App\Session','session_id');
    }
}
