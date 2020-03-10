<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Professeur extends Authenticatable implements ToModel, WithHeadingRow
{
    use Notifiable;

    protected $guard = 'professeur';
    protected $table="professeur";
    protected $fillable=['cin','nom','prenom','username','email','password','grade','departement_id'];
    protected $primaryKey='professeur_id';

    /**
     * @param array $row
     *
     * @return Model|Model[]|null
     */
    public function model(array $row)
    {
        // TODO: Implement model() method.
        return new Professeur(array(
            'cin' => $row['cin'],
            'nom' => $row['nom'],
            'prenom' => $row['prenom'],
            'username' => $row['username'],
            'email' => $row['email'],
            'password' => $row['password'],
            'grade' => $row['grade'],
            'departement_id' => $row['departement_id'],
        ));
    }

    public function matiere(){
        return $this->belongsToMany('App\Matiere','matiere_prof','professeur_id','matiere_id');
    }

}
