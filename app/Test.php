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
    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        return new test(array(
            'nom'     => $row['nom'],
            'note'    => $row['note'],
            'duree'    => $row['duree'],
            'salle'    => $row['salle'],
            'date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date']),
        ));    }
}
