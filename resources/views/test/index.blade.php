<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action='{{route('test.store')}}'{{action("TestController@store")}} method='POST'>
    @csrf
    <label>
        Nom de Test
        <input type="text" name="nom">
    </label>
    <label>
        Note
        <input type="number" name="note">
    </label>
    <label>
        Duree
        <input type="number" name="duree">
    </label>
    <label>
        Salle
        <input type="text" name="salle">
    </label>
    <label>
        Date
        <input type="date" name="date">
    </label>
    <label>
        Nombre des etudiant dans un groupe
        <input type="number" name="ng">
    </label>
    <div class="form-group">
        <label for="niveau_id" style="color:#c21db7;">Niveau</label>
        <?php

        use App\filiere;use App\Niveau;$niveaux = Niveau::all();
        echo "<select size='2' name=niveau_id>";
        foreach ($niveaux as $n) {
            $niveau_id = $n->niveau_id;
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
        foreach ($filieres as $f) {
            $id_filiere = $f->filiere_id;
            echo "<option value=$id_filiere>$f->nom</option>";
        }
        echo "</select>";
        ?>
    </div>
    <button type="submit">Enregistrer</button>
</form>
<br><br>
<table>
    <thead>
    <tr>
        <!--<th>ID</th>-->
        <th>Nom de test</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tests as $test)
        <tr>
            <td>{{$test->nom}}</td>
            <td><a href="{{route('test.pdf',['test'=>$test->test_id])}}"><button class="btn btn-danger">Export les sessions pdf</button></a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
