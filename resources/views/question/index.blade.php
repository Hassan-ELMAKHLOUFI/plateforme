<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $test1=$test->test_id;?>
<form action="{{ route('Resultat.store')}}" method="post">
  @csrf

    @foreach ($qcms['qcms']  as $qcm)


      {{ $qcm->question_text }}<br>
           <?php $opt=$qcm->options;?>
         @foreach ($opt  as $option)

 <input type="checkbox" name="options[{{ $option->option_id }}]" id="option-{{$option->option_id}}" value="{{$option->option_id}}"">{{$option->option_text}}<br>


         @endforeach


    @endforeach
 @foreach ($binaires['binaires']  as $binaire)


        {{ $binaire->question_text }}<br>
        <?php $opt1=$binaire->options;?>
        @foreach ($opt1  as $option)
              <input type="radio" name="questions[{{ $binaire->binaire_id}}]" id="option-{{$option->option_id}}" value="{{$option->option_id}}">{{$option->option_text}}<br>
        @endforeach


    @endforeach

    <input type="hidden" name="test_id" value="{{$test1}}">
    <input type="submit" value="enregistrer">
  </form>
</body>
</html>
