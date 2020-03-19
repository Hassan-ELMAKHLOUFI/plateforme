<html>
<head>
    <title>Webslesson Demo - Dynamically Add or Remove input fields in PHP with JQuery</title>
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

        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th class="exclude">#</th>
                    <th>option text</th>
                    <th>point</th>
                    <th>id binaire</th>

                    <th class="exclude">Action</th>
                </tr>
                <tbody>
                @foreach($options['options'] as $key=>$option)
                    <tr>
                        <td class="exclude">{{++$key}}</td>
                        <td>{{$option->option_text}}</td>
                        <td>{{$option->point}}</td>
                        <td>{{$option->binaire_id}}</td>

                        <td class="exclude">
                            <a data-option_id="{{$option->option_id}}"
                               data-option_text="{{$option->option_text}}"
                               data-point="{{$option->point}}"
                               data-binaire_id="{{$option->binaire_id}}"
                               data-toggle="modal"
                               data-target="#exampleModal-edit" class="edit" title="modifier"><i class="material-icons">&#xE254;</i></a>
                            <a data-option_id="{{$option->option_id}}"
                               data-toggle="modal"
                               data-target="#exampleModal-delete" class="delete" title="supprimer"><i class="material-icons">&#xE872;</i></a>
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

                <form action="{{route('option.update','option_id')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <label for="" style="color:#c21db7;">nom</label>

                        <input type="text" style="color:black;" id="option_text" name="option_text" class="form-control"
                               placeholder="option">
                    </div>
                    <input type="hidden" style="color:black;" name="option_id" id="option_id">
                    <br>
                    <div class="form-group">

                        <label for="" style="color:#c21db7;">point</label>


                        <input type="number" style="color:black;" id="point" name="point" class="form-control"
                               placeholder="option">
                    </div>
                    <br>

                    <div class="form-group">

                        <label for="" style="color:#c21db7;">id binaire</label>

                        <input type="text" id="binaire_id" style="color:black;" name="binaire_id"
                               class="form-control" placeholder="binaire id">
                    </div>
                    <br>

                    <div class="form-group">


                        <label for="" style="color:#c21db7;">QCM id</label>

                        <input type="number" style="color:black;" id="question_id" name="question_id"
                               class="form-control"
                               placeholder="question id">
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

                <form action="{{route('option.destroy','option_id')}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="hidden" name="option_id" id="option_id">
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
        var option_text = button.data('option_text')
        var point = button.data('point')
        var binaire_id = button.data('binaire_id')
        var option_id =  button.data('option_id')


        var modal = $(this)

        modal.find('.modal-title').text('modifier');
        modal.find('.modal-body #option_text').val(option_text);
        modal.find('.modal-body #point').val(point);
        modal.find('.modal-body #binaire_id').val(binaire_id);
        modal.find('.modal-body #option_id').val(option_id);
    });


    $('#exampleModal-delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var option_id = button.data('option_id')


        var modal = $(this)

        modal.find('.modal-title').text('supprimer');

        modal.find('.modal-body #option_id').val(option_id);
    });

</script>


