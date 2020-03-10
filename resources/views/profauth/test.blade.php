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

<h1>Bonjour , {{$prof->username}}</h1>
<a href="create-test/{{$prof->professeur_id}}">Ajouter test</a>
<table>
    <thead>
    <tr>
        <th>My Tests</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $tests = \App\Test::find($prof->professeur_id);

    ?>
    @if(!empty($tests))
        @foreach($tests as $test)
            <tr>
                <td>{{$test->nom}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>
</body>
</html>
