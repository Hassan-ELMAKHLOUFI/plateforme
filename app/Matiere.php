<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Matiere extends Model implements ToModel, WithHeadingRow
{
    protected $table = "matiere";
    protected $fillable = ['nom_matiere', 'module_id', 'volume_horaire'];
    protected $primaryKey = 'matiere_id';

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
            'module_id' => $row['module_id'],
            'datefin' => $row['datefin'],
            'departement_id' => $row['departement_id']
        ));
    }
}
