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
<?php $matiere_id = $test->matiere_id; ?>
<?php $professeur_id = $test->professeur_id; ?>
<?php $tests = DB::table('test')->where('matiere_id', $matiere_id)->where('professeur_id', $professeur_id)->get();?>
<form action="{{action('question@StoreSelected')}}" method="POST">
    @csrf
    @foreach($tests as $test)

        <?php $qcms['qcms'] = DB::table('qcm')->where('test_id', $test->test_id)->get();?>
        @foreach($qcms['qcms'] as $qcm)
            <input type="checkbox" name="qcm[]" value="{{$qcm->question_id}}"> {{$qcm->question_text}}<br>
        @endforeach

        <?php $binaires['binaires'] = DB::table('binaire')->where('test_id', $test->test_id)->get();?>
        @foreach($binaires['binaires'] as $binaire)
            <input type="checkbox" name="bin[]" value="{{$binaire->binaire_id}}"> {{$binaire->question_text}}<br>
        @endforeach

        <?php $text_libre['text_libre'] = DB::table('text_libre')->where('test_id', $test->test_id)->get();?>
        @foreach($text_libre['text_libre'] as $text_libre)
            <input type="checkbox" name="text_libre[]" value="{{$text_libre->question_id}}"> {{$text_libre->question_text}}<br>
        @endforeach


    @endforeach
    <input type="hidden" name="test_id" value="{{$test->test_id}}">
    <input type="submit" value="rrr">
</form>
</body>
</html>
