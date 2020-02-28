<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Test extends Model implements ToModel, WithHeadingRow
{

    protected $table="test";
    protected $fillable=['nom','note','duree','salle','date'];
    protected $primaryKey='test_id';
    //
    public function model(array $row)
    {
        return new test(array(
            'nom'     => $row['nom'],
            'note'    => $row['note'],
            'duree'    => $row['duree'],
            'salle'    => $row['salle'],
            'date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']),
        ));
    }

    public function groupe(){
        return $this->hasMany('App\Groupe');
    }

    public function qcm(){
        return $this->hasMany('App\QCM');
    }

    public function text_libre(){
        return $this->hasMany('App\Text_libre');
    }

    public function resultat(){
        return $this->hasMany('App\Resultat');
    }
}
