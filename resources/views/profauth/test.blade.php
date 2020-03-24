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
<a href="{{route('profauth.logout')}}">Logout</a>
<h1>Bonjour , {{$prof->username}}</h1>
<a href="create-test/{{$prof->professeur_id}}">Ajouter test</a>
<table>
    <thead>
    <tr>
        <th>My Tests</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
<<<<<<< HEAD
    //$tests = \App\Test::find($prof->professeur_id);
    $tests = DB::table('test')->where('professeur_id', '=', $prof->professeur_id)->get();

    ?>

        @foreach($tests as $test)
            <?php $test1=$test->nom?>
            <tr>
                <td>{{$test1}}</td>
            </tr>
        @endforeach

=======
    $tests = DB::table('test')->where('professeur_id','=', $prof->professeur_id)->get();

    ?>

    @foreach($tests as $test)
        <tr>
            <td>{{$test->nom}}</td>
            <td><a href="/create-question1/{{$test->test_id}}">Ajouter question</a></td>
        </tr>
    @endforeach
>>>>>>> origin/master
    </tbody>
</table>
</body>
</html>
