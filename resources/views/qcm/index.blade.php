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

    
      {{ $qcm->question_text }}  
           <?php $opt=$qcm->options;  ?>
         @foreach ($opt  as $option)
        
            @if ($option->qcm->type=='vrai/faux')
            
                       <input type="radio" name="questions[{{ $qcm->question_id }}]" id="option-{{$option->option_id}}" value="{{$option->option_id}}">{{$option->option_text}}
           @endif

           @if ($option->qcm->type=='multiple')  
                    <input type="checkbox" name="options[{{ $option->option_id }}]" id="option-{{$option->option_id}}" value="{{$option->option_id}}" >{{$option->option_text}}
           @endif

         @endforeach    
   
        
    @endforeach
    {{$test1}}
    <input type="hidden" name="test_id" value="{{$test1}}">
    <input type="submit" value="hhh">
  </form>
</body>
</html>