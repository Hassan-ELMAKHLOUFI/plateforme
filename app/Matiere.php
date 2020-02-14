<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Matiere extends Model implements ToModel, WithHeadingRow
{
    protected $table = "matiere";
    protected $fillable = ['nom_matiere', 'id_module', 'volume_horaire'];
    protected $primaryKey = 'id_math';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new filiere(array(
            'nom_matiere' => $row['nom_matiere'],
            'volume_horaire' => $row['volume_horaire'],
            'id_module' => $row['id_module'],
            'datefin' => $row['datefin'],
            'id_departement' => $row['id_departement']
        ));
    }
}
