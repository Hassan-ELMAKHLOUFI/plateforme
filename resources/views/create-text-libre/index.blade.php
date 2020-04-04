<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <link href="{{asset('/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('/css/style1.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- level-->
    <link rel="stylesheet" href="{{asset('/css/form.css')}}">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('/css/themes/bars-movie.css')}}">

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
            <a href="#hero"><img src="/img/logo.png" alt="" title=""></img></a>
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
                    <li>
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
                    <li class="active">
                        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Création question text </a>
                    </li>

                    </li>
                </ul>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Création des questions</h2>
            <section id="services">
                <div class="container wow fadeIn">
                    <div class="section-header">
                    </div>
                    <div class=" card-6" style="margin-left: -3.75rem;">
                        <div class="">
                            <form action="{{action('Text_libreController@store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="test_id" value="{{$test['test_id']}}">
                                <div class="form-row">
                                    <div class="name" style="height: 1.25rem;line-height: 0rem;">Difficulté</div>
                                    <div class="value">
                                        <div class="input-group" >
                                            <select id="example-movie" name="difficulty" autocomplete="off" >
                                                <option value="1">Trés facile</option>
                                                <option value="2">Facile</option>
                                                <option value="3" selected="selected">Moyenne</option>
                                                <option value="4">Difficile</option>
                                                <option value="5">Trés difficile</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Question</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input required pattern=".{1,255}" title="le nombre maximum de caractères 1 - 2048" type="text"
                                                   name="question_text">
                                        </div>
                                    </div>
                                </div>
                                <div class=" form-row ">

                                    <div class="name">Note</div>
                                    <div class="value">
                                        <input required type="number" name="note" min="1">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <input type="submit" name="submit" id="submit" style="width: 17rem; margin-left:7rem; "
                                       class="btn btn-info" value="Ajouter et enregistrer"/>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="table-wrapper" style="width: 100rem; margin-top: 3.125rem">
                    <table class="table table-bordered" id="myTable">
                        <thead>
                        <tr>
                            <th>question_id</th>
                            <th>question text</th>
                            <th>note</th>
                            <th>difficulty</th>
                            <th>Action</th>
                        </tr>
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
                                <td class="exclude">
                                    <a data-question_id="{{$q->question_id}}"
                                       data-question_text="{{$q->question_text}}"
                                       data-note="{{$q->note}}"
                                       data-difficulty="{{$q->difficulty}}"
                                       data-test_id = "{{$q->test_id}}" data-toggle="modal"
                                       data-target="#exampleModal-edit" class="edit" title="modifier"><i
                                            class="material-icons">&#xE254;</i></a>
                                    <a data-question_id="{{$q->question_id}}"
                                       data-toggle="modal"
                                       data-target="#exampleModal-delete" class="delete" title="supprimer"><button><i
                                                class="material-icons">&#xE872;</i></button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                        </thead>

                    </table>
                </div>
        </div>
    </div>


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

    </div>
    </section><!-- #services -->


    </div>

    </div>


</main>

<!--==========================
  Footer
============================-->
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

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<script>
    $(document).ready(function () {
        var i = 1;
        $('#add').click(function () {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="checkbox" style="height: 17rem;width: 1.6rem;margin-right: 0.375rem"  name="point[]"  value="' + i + '" > <textarea  placeholder="" class="textarea--style-6 "name="option_text[]" style=" margin-bottom: 1.25rem;"></textarea><input type="hidden" name="hidden[]" value="' + i + '" ><i type="button" name="remove" id="' + i + '" style="top:-7.8rem;left:0.625rem" class="glyphicon glyphicon-trash btn_remove"></i></td></tr>');
        });

        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });

        $('#submit').click(function () {
            $.ajax({
                url: "name.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function (data) {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });

    });
</script>
<!-- JavaScript Libraries -->
<script src="{{asset('/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('/lib/superfish/superfish.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->

<script src="{{asset('/js/main.js')}}"></script>

<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js')}}"></script>
<script src="{{asset( '/jquery.barrating.min.js' )}}"></script>
<script type="text/javascript">
    $(function () {
        $('#example').barrating({
            theme: 'fontawesome-stars'
        });
    });
</script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="{{asset( '/js/jquery.barrating.min.js' )}}"></script>
<script src="{{asset( '/js/examples.js' )}}"></script>
</body>
</html>
