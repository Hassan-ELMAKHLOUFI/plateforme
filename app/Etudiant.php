<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Etudiant extends Model implements ToModel, WithHeadingRow
{
    protected $table = "etudiant";
    protected $fillable = ['cin', 'niveau_id', 'groupe_id', 'cne', 'nom', 'prenom', 'email_address', 'username', 'password', 'numero', 'num_apologie'];
    protected $primaryKey = 'etudiant_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new etudiant(array(
            'niveau_id' => $row['niveau_id'],
            'cin' => $row['cin'],
            'cne' => $row['cne'],
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'email_address' => $row['email_address'],
            'username' => $row['username'],
            'password' => $row['password'],
            'numero' => $row['numero'],
            'num_apologie' => $row['num_apologie'],
        ));
    }

    public function reponse_text()
    {
        return $this->hasMany('App\Reponse_text');
    }

    public function session()
    {
        return $this->hasMany('App\Session');
    }

}
