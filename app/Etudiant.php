<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Etudiant extends Model implements ToModel, WithHeadingRow
{
    protected $table = "etudiant";
    protected $fillable = ['cin', 'id_niveau', 'cne', 'nom', 'prenom', 'email_address', 'username', 'password', 'numero', 'num_apologie'];
    protected $primaryKey = 'id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new etudiant(array(
            'id'     => $row['id'],
            'id_niveau'    => $row['id_niveau'],
            'cin'    => $row['cin'],
            'cne'    => $row['cne'],
            'nom'    => $row['nom'],
            'prenom'    => $row['prenom'],
            'email_address'    => $row['email_address'],
            'username'    => $row['username'],
            'password'    => $row['password'],
            'numero'    => $row['numero'],
            'num_apologie'    => $row['num_apologie'],
        ));
    }
}
