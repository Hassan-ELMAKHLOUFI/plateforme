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

<form action="{{action('BinaireController@store1')}}" method="post">
@csrf

    <input type="text" name="question" >

    <input type="radio" name="choice" value="vrai">vrai
    <input type="radio" name="choice" value="faux">faux
   <input type="hidden" name="test_id" value="{{$test->test_id}}">

</form>
</body>
</html>
