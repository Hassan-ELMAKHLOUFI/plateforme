<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Test</title>

   </head>


<body>

<h1>Bienvenue {{$data['s']->username}}</h1>
<?php
use Illuminate\Support\Facades\DB;
    $etudiant = \App\Etudiant::findOrFail($data['s']->etudiant_id);
    $filiere = \App\filiere::findOrFail($etudiant->filiere_id);
    $niveau = \App\Niveau::findOrfail($etudiant->niveau_id);
?>
<h1> les tests disponible pour la filiere : {{$filiere->nom}} , niveau : {{$niveau->nom}}</h1>


<?php  $tests = DB::table('test')->where('test_id', '=', $data['s']->test_id)->get()?>

@foreach ($tests as $test)

    <a href="/question/{{$test->test_id}}">{{ $test->nom }}</a>   ;


@endforeach


   </body>
</html>
