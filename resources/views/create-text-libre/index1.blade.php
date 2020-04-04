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
<form action="{{action('Text_libreController@store')}}" method="POST">
    @csrf
    <input type="hidden" name="test_id" value="{{$test['test_id']}}">
    <label>
        Question:
        <input required pattern=".{1,255}" title="le nombre maximum de caractères 1 - 2048" type="text"
               name="question_text">
    </label>
    <br>
    <select required name="difficulty">
        <option value="1">trés facile</option>
        <option value="2">facile</option>
        <option value="3">moyenne</option>
        <option value="4">difficile</option>
        <option value="5">très difficile</option>
    </select>

    <label>
        Note:
        <input required type="number" name="note" min="1">
    </label>
    <input type="submit" name="submit">
</form>
<table>
    <thead>
    <tr>
        <th>question_id</th>
        <th>question text</th>
        <th>note</th>
        <th>difficulty</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @php
        $questions = \App\Text_libre::query()->where('test_id','=',$test['test_id'])->get();
    @endphp
    @foreach($questions as $q)
        <tr>
            <td>{{$q->question_id}}</td>
            <td>{{$q->question_text}}</td>
            <td>{{$q->note}}</td>
            <td>{{$q->difficulty}}</td>
            <td>
                <a data-question_id="{{$q->question_id}}"
                   data-question_text="{{$q->question_text}}"
                   data-note="{{$q->note}}"
                   data-difficulty="{{$q->difficulty}}"
                   data-test_id = "{{$q->test_id}}"
                   data-toggle="modal"
                   data-target="#exampleModal-edit" type="button"
                   class="btn btn-warning btn-sm">modifier</a>
                <a data-question_id="{{$q->question_id}}" data-toggle="modal"
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
                <form action="{{route('create-text-libre.update','question_id')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="test_id" id="test_id1" value="">
                    <input type="hidden" name="question_id" id="question_id1" value="">
                    <label>
                        Question :
                        <input type="text" name="question_text" id="question_text" pattern=".{1,255}"
                               title="le nombre maximum de caractères 1 - 2048">
                    </label>
                    <br>
                    <label>
                        Note :
                        <input type="number" name="note" id="note" min="1">
                    </label>
                    <br>
                    <label>
                        Difficulty :
                        <select required name="difficulty">
                            <option value="1">trés facile</option>
                            <option value="2">facile</option>
                            <option value="3">moyenne</option>
                            <option value="4">difficile</option>
                            <option value="5">très difficile</option>
                        </select>
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

                <form action="{{route('create-text-libre.destroy','question_id')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input required type="hidden" name="question_id" id="question_id">
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
<div>
</body>
</html>
<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var test_id = button.data('test_id')
        var question_id = button.data('question_id')
        var question_text = button.data('question_text')
        var note = button.data('note')
        var difficulty = button.data('difficulty')
        document.getElementById('test_id1').value = test_id;
        document.getElementById('question_id1').value = question_id;
        var modal = $(this)

        modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
        modal.find('.modal-body #question_id').val(question_id);
        modal.find('.modal-body #question_text').val(question_text);
        modal.find('.modal-body #note').val(note);
        modal.find('.modal-body #difficulty').val(difficulty);
    });

    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var question_id = button.data('question_id')

        var modal = $(this)

        modal.find('.modal-title').text('delete STUDENT INFORMATION');

        modal.find('.modal-body #question_id').val(question_id);
    });
</script>
