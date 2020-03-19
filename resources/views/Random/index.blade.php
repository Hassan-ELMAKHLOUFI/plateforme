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
<?php $test1=$test->test_id;
?>
@if(session()->has('notif'))
    <div class="row">
        <div class="alert alert-success">
            <button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;

            </button>
            <strong>NOTIfication</strong> {{session()->get('notif')}}
        </div>
    </div>

@endif
<form action="{{action('question@RandomStoring')}}" method="GET">

@csrf

    <input type="radio" name="type" value="qcm">QCM
    <input type="radio" name="type" value="binaire">Binaire
    <input type="number" name="nombre"> nombre de quexstion a ajouter
    <input type="hidden" name="test_id" value="{{$test1}}">
    <select name="difficulty" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
   </select>
</form>
</body>
</html>
