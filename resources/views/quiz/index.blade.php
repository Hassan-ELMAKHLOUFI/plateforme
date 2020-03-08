<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Test</title>
   
   </head>


   <body>
        <h1> les tests disponible </h1>
    
    
  <?php  $tests =app\test::all()?>  
  
    @foreach ($tests as $test)
     
         <a href="/qcm/{{$test->test_id}}">{{ $test->nom }}</a>   ;
     
    
 @endforeach

    
   </body>
</html>