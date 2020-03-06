<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('groupe.store')}}"  method='POST'>
    @csrf
    <label>
        Nombre des etudiant dans un groupe
        <input type="number" name="ng">
    </label>
    <div class="form-group">
        <label for="niveau_id" style="color:#c21db7;">Niveau</label>
        <?php

        use App\filiere;use App\Niveau;$niveaux = Niveau::all();
        echo "<select size='2' name=niveau_id>";
        foreach($niveaux as $n){
            $niveau_id =$n->niveau_id;
            echo "<option value=$niveau_id>$n->nom</option>";
        }
        echo "</select>";
        ?>
    </div>
    <div class="form-group">
        <label for="filiere_id" style="color:#c21db7;">Filiere</label>
        <?php

        $filieres = filiere::all();
        echo "<select size='2' name=filiere_id>";
        foreach($filieres as $f){
            $id_filiere=$f->filiere_id;
            echo "<option value=$id_filiere>$f->nom</option>";
        }
        echo "</select>";
        ?>
    </div>

    <button type="submit">Submit</button>
</form>
</body>
</html>
