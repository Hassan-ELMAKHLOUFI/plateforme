<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/2622940fba.js" crossorigin="anonymous"></script>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="style.css" rel="stylesheet">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
</head>
<body>

<form action="{{action('BinaireController@store1')}}" method="post">
@csrf

    <input type="text" name="question" >

    <input type="radio" name="choice" value="vrai">vrai
    <input type="radio" name="choice" value="faux">faux
    <select name="difficulty" id="difficulty">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
   <input type="hidden" name="test_id" value="{{$test->test_id}}">
    <label for="" >note</label>

    <input type="number" id="note" style="color:black;" name="note" placeholder="note">
    <input type="submit"  value="salam">
</form>
@php
    //  use \App
        $binaires = App\binaire::OrderBy('binaire_id','asc')->where('test_id',$test->test_id)->get(); @endphp
<div class="table-responsive">
    <table class="table table-bordered" id="myTable">
        <thead>
        <tr>
            <th class="exclude">#</th>
            <th>question text</th>
            <th>note</th>
            <th>difficultes</th>
            <th>id test</th>
            <th class="exclude">Action</th>
        </tr>
        <tbody>

        @foreach($binaires as $key=>$binaire)
            <tr>
                <td class="exclude">{{++$key}}</td>
                <td>{{$binaire->question_text}}</td>
                <td>{{$binaire->note}}</td>
                <td>{{$binaire->difficulty}}</td>
                <td>{{$binaire->test_id}}</td>
                <td class="exclude">
                    <a data-binaire_id="{{$binaire->binaire_id}}"
                       data-question_text="{{$binaire->question_text}}"
                       data-note="{{$binaire->note}}"
                       data-difficulty="{{$binaire->difficulty}}"
                       data-test_id="{{$binaire->test_id}}" data-toggle="modal"
                       data-target="#exampleModal-edit" class="edit" title="modifier"><i class="material-icons">&#xE254;</i></a>
                    <a data-binaire_id="{{$binaire->binaire_id}}"
                       data-toggle="modal"
                       data-target="#exampleModal-delete" class="delete" title="supprimer"><i class="material-icons">&#xE872;</i></a>

                    <a href="option/binaire/{{$binaire->binaire_id}}"><i class="material-icons">&#xE872;</i></a>
                </td>
            </tr>
        @endforeach
        </tbody>

        </thead>

    </table>
</div>
</div>
</div>


<!-- Modal edit -->
<div class="modal fade-left" id="exampleModal-edit" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">modifier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('create-binaire.update','binaire_id')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label for="" style="color:#c21db7;">question text</label>

                        <input type="text" style="color:black;" id="question_text" name="question_text" class="form-control"
                               placeholder="question">
                    </div>
                    <input type="hidden" style="color:black;" name="binaire_id" id="binaire_id">
                    <br>
                    <div class="form-group">

                        <label for="" style="color:#c21db7;">difficultes </label>


                        <select name="difficulty" id="difficulty"  class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">45</option>
                        </select>
                    </div>
                    <br>

                    <div class="form-group">

                        <label for="" style="color:#c21db7;">note</label>

                        <input type="text" id="note" style="color:black;" name="note"
                               class="form-control" placeholder="note">
                    </div>
                    <br>

                    <div class="form-group">


                        <label for="" style="color:#c21db7;">id test</label>

                        <input type="number" style="color:black;" id="test_id" name="test_id"
                               class="form-control"
                               placeholder="test id">
                    </div>
                    <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>

                <button type="submit" class="btn btn-success">modifier</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal delete -->
<div class="modal fade-left" id="exampleModal-delete" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">supprimer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{route('create-binaire.destroy','binaire_id')}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="binaire_id" id="binaire_id">
                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer cette question</p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-danger">supprimer</button>
            </div>
            </form>
        </div>
    </div>


</div>


</body>
</html>




<script>


    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var question_text = button.data('question_text')
        var note = button.data('note')
        var difficulty = button.data('difficulty')
        var test_id = button.data('test_id')
        var binaire_id =  button.data('binaire_id')


        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #question_text').val(question_text);
        modal.find('.modal-body #note').val(note);
        modal.find('.modal-body #difficulty').val(difficulty);
        modal.find('.modal-body #test_id').val(test_id);
        modal.find('.modal-body #binaire_id').val(binaire_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var binaire_id = button.data('binaire_id')


        var modal = $(this)

        modal.find('.modal-title').text('supprimer');

        modal.find('.modal-body #binaire_id').val(binaire_id);
    });

</script>



