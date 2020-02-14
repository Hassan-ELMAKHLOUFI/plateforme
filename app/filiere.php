<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class filiere extends Model implements ToModel, WithHeadingRow
{
    protected $table = "filiere";

    protected $fillable = ['nom', 'coordinateur', 'datedebut', 'datefin', 'id_departement'];
    protected $primaryKey = 'id_filiere';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new filiere(array(
            'id_filiere' => $row['id_filiere'],
            'nom' => $row['nom'],
            'coordinateur' => $row['coordinateur'],
            'datedebut' => $row['datedebut'],
            'datefin' => $row['datefin'],
            'id_departement' => $row['id_departement']
        ));
    }
}
