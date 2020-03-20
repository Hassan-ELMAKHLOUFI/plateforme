<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
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
        <th>Ajouter les questions</th>
        <th>les reponses</th>
        <th>session</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $tests = DB::table('test')->where('professeur_id', '=', $prof->professeur_id)->get();

    ?>

    @foreach($tests as $test)
        @php
            $sess = App\Session::query()->where('test_id','=',$test->test_id)->first();
                if ( $sess->active == 0){
                    $value = 0;
                }else{
                    $value = 1;
                }
        @endphp
        <tr>
            <td>{{$test->nom}}</td>
            <td><a href="/create-question1/{{$test->test_id}}">Ajouter question</a></td>
            <td><a href="/reponses/{{$test->test_id}}">reponses</a></td>
            <td>
                <form action="{{action('TestController@setSession')}}" method="POST">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="test_id" value="{{$test->test_id}}">
                    @if($value == 0)
                        <button name="active" value="0">Activer la session</button>
                    @endif
                    @if($value == 1)
                        <button name="active" value="1">disactiver la session</button>
                    @endif
                </form>

            </td>
            <td>
                <a data-test_id="{{$test->test_id}}"
                   data-nom="{{$test->nom}}"
                   data-note="{{$test->note}}"
                   data-duree="{{$test->duree}}"
                   data-salle="{{$test->salle}}"
                   data-date="{{$test->date}}"
                   data-discription="{{$test->discription}}"
                   data-professeur_id="{{$test->professeur_id}}"
                   data-matiere_id="{{$test->matiere_id}}"
                   data-toggle="modal"
                   data-target="#exampleModal-edit" type="button"
                   class="btn btn-warning btn-sm">modifier</a>
                <a data-test_id="{{$test->test_id}}" data-toggle="modal"
                   data-target="#exampleModal-delete" class="btn btn-danger btn-sm">supprimer</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
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

                <form action="{{action('TestController@update1',$test->test_id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="test_id" id="test_id">
                    <label>
                        Nom de test.
                        <input type="text" pattern=".[a-zA-Z0-9]{1,255}"
                               title="aucun caractère spécial n'est autorisé 1 - 255 max" name="nom" id="nom"
                               class="form-control"
                               required>
                    </label>
                    <br>
                    <label>
                        Discription
                        <textarea rows="8" cols="33" name="discription" id="discription" class="form-control"
                                  required></textarea>
                    </label>
                    <br>
                    <label>
                        Note
                        <input type="number" name="note" id="note" class="form-control" min="1" required>
                    </label>
                    <br>
                    <label>
                        Duree(minute)
                        <input type="number" name="duree" id="duree" class="form-control" min="1" required>
                    </label>
                    <br>
                    <label>
                        Salle
                        <input pattern="[a-zA-Z0-9]{1,255}"
                               title="aucun caractère spécial n'est autorisé 1 - 255 max"
                               type="text" name="salle" id="salle" class="form-control" required>
                    </label>
                    <br>
                    <label>
                        Date
                        <input type="date" name="date" id="date"
                               class="form-control" required>
                    </label>
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

                <form action="{{action('TestController@destroy','test_id')}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input required type="hidden" name="test_id" id="test_id">
                    <p class="text-center" width="50px"> vous ete sûre que vous voulez supprimer ce
                        matiere</p>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-danger">supprimer</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<div>

</div>

</div>
</body>
</html>
<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var test_id = button.data('test_id')
        var nom = button.data('nom')
        var note = button.data('note')
        var duree = button.data('duree')
        var salle = button.data('salle')
        var date = button.data('date')
        var discription = button.data('discription')
        var matier_id = button.data('matier_id')

        var modal = $(this)

        modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
        modal.find('.modal-body #test_id').val(test_id);
        modal.find('.modal-body #nom').val(nom);
        modal.find('.modal-body #note').val(note);
        modal.find('.modal-body #duree').val(duree);
        modal.find('.modal-body #date').val(date);
        modal.find('.modal-body #salle').val(salle);
        modal.find('.modal-body #discription').val(discription);
        modal.find('.modal-body #matier_id').val(matier_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var test_id = button.data('test_id')

        var modal = $(this)

        modal.find('.modal-title').text('delete STUDENT INFORMATION');

        modal.find('.modal-body #test_id').val(test_id);
    });

</script>
