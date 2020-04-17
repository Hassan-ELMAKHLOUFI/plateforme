<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Theme included stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
    <link href="{{asset('/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <link href="{{asset('/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('/css/style1.css')}}" rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- level-->
    <link rel="stylesheet" href="{{asset('/css/form.css')}}">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">

    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}"
          rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">


    <link rel="stylesheet" href="{{asset('/css/themes/bars-movie.css')}}">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Main Quill library -->
    <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script src="/js/jspdf.min.js"></script>
    <title>Document</title>

</head>
<body>
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

        <div class="table-wrapper" style="width: 100rem; margin-top: 3.125rem">
            <table class="table table-bordered" id="myTable">
                <thead>
                <tr>
                    <th>nom</th>
                    <th>reponses</th>
                    <th>note final</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <form action="{{action('ResultatController@storeFinal')}}" method="POST">
                    @csrf
                    @php
                        $i = 0;
                    @endphp
                    @foreach($session as $s)
                        <tr>
                            <td>{{$s->username}}</td>
                            <td>
                                @php $reponses = \App\Reponse_text::query()->where('etudiant_id','=',$s->session_id)->get() @endphp
                                <button value="{{$reponses}}" type="button" class="word" onclick="getWord(this)">
                                    reponses
                                </button>
                            </td>
                            <td>
                                @php
                                    $resultat = DB::table('resultat')->where('session_id',$s->session_id)->first();
                                @endphp
                                @if($resultat != null)
                                    {{$resultat->note_total}}
                                @endif
                            </td>
                            <td>
                                @php
                                    $resultat = DB::table('resultat')->where('session_id',$s->session_id)->first();
                                @endphp
                                <a data-session_id="{{$s->session_id}}"
                                   data-note_total="@if($resultat != null){{$resultat->note_total}} @else 0 @endif"
                                   data-toggle="modal"
                                   data-target="#exampleModal-edit">
                                    <button type="button" class="btn btn-warning">Modifier</button>
                                </a>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp

                    @endforeach
                    <input type="hidden" name="nbr" value="{{$i}}">

                </form>
            </table>
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
                        <form action="{{action('ResultatController@update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="session_id" name="session_id"/>

                            <input required type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="note_final" style="color:#c21db7;">Note Final</label>
                                <input type="number" id="note_final" name="note_final" class="form-control" min="0" value="" required />
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>

                        <button type="submit" class="btn btn-success">modifier</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
<script src="{{asset('/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>
<script>
    $('#exampleModal-edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var session_id = button.data('session_id');
        var note_total = button.data('note_total');

        var modal = $(this);

        modal.find('.modal-title').text('EDIT STUDENT INFORMATION');
        modal.find('.modal-body #session_id').val(session_id);
        modal.find('.modal-body #note_final').val(note_total);
    });
</script>
<script>
    function getWord(elm) {
        var doc = new jsPDF();
        var reponses = JSON.parse(elm.value);
        var i = 0;
        var out = "";
        while (i < reponses.length) {
            out = out + reponses[i].fichier;
            out = out + "<br>" + "<hr>";
            i++;
        }
        doc.fromHTML(out);
        //console.log(reponses);
        doc.fromHTML();
        doc.save($(elm).closest('tr').find("td:first-child").text() + '.pdf');
    }
</script>
<!-- JavaScript Libraries -->

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


