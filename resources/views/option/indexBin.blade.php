<html>
    <head>
        <meta charset="utf-8">
        <title>Regna Bootstrap Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="{{asset('img/favicon.png')}}" rel="icon">
        <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
        <link href="{{asset( 'css/style.css' )}}" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
              rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="{{asset('css/style1.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
        <!-- level-->
        <link rel="stylesheet" href="{{asset('css/form.css')}}">

        <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
        <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

        <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

        <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

        <link rel="stylesheet" href="{{asset('css/themes/bars-movie.css')}}">

        <!-- =======================================================
          Theme Name: Regna
          Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->
    </head>

<body>


<!--==========================
Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="/img/logo.png" alt="" title=""/></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="menu-has-children"><a href="#">Drop Down 2</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<!--==========================
  Hero Section
============================-->
<section id="hero">

</section><!-- #hero -->

<main id="main">

    <!--==========================
      Services Section
    ============================-->
    <div class="container d-flex align-items-stretch" style="margin-left: 0rem;">
        <nav id="sidebar" class="img" style="background-image: url(/images/stu.jpg);">
            <div class="p-4">
                <h1><a class="logo">Services</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="index.html"><span class="fa fa-home mr-3"></span> Acceuil</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-user mr-3"></span> Création des test</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-plane mr-3"></span> table des test</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-sticky-note mr-3"></span> création question qcm</a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-cogs mr-3"></span> Création question binaire </a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Création question text </a>
                    </li>

                    </li>
                </ul>

            </div>
        </nav>
        <div id="content" class="p-4 p-md-5 pt-5" style="width: 100rem; margin-top: 3.125rem">
        <div class="table-responsive">
            <table class="table table-bordered" style=" border-top: 2px solid #DCDCDC;"id="myTable">
                <thead>
                <tr>
                    <th class="exclude">#</th>
                    <th>option text</th>
                    <th>point</th>
                    <th>id question</th>
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


