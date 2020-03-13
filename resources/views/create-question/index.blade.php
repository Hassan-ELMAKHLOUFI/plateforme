<!DOCTYPE html>
<html>
    <head>
    <meta charset>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>

      <body>
      <?php $test1 = $test['test']->test_id ;?>
        <a href="/create-bin/{{$test1}}">vrai/faux</a>
        <a href="/create-text-libre/{{$test1}}">texte libre</a>
        <a href="/create-qcm1/{{$test1}}">QCM</a>
            </body>
</html>
