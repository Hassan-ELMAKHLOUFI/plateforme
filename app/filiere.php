<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class filiere extends Model implements ToModel, WithHeadingRow
{
    protected $table = "filiere";

    protected $fillable = ['nom', 'coordinateur', 'datedebut', 'datefin', 'departement_id'];
    protected $primaryKey = 'filiere_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new filiere(array(
            'filiere_id' => $row['filiere_id'],
            'nom' => $row['nom'],
            'coordinateur' => $row['coordinateur'],
            'datedebut' => $row['datedebut'],
            'datefin' => $row['datefin'],
            'departement_id' => $row['departement_id']
        ));
    }
}
