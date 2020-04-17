<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Regna Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style4.css')}}" rel="stylesheet">

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
            <a href="#hero"><img src="{{asset('img/logo.png')}}" alt="" title=""/></a>
            <!-- Uncomment below if you prefer to use a text logo -->
            <!--<h1><a href="#hero">Regna</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">

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
         Portfolio Section
       ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="row">

                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter=".filter-card" class="filter-active">mes test</li>
                        <li data-filter=".filter-logo">mes classes</li>
                    </ul>
                </div>
            </div>

            <div class="row" id="portfolio-wrapper">
                <div class="col-lg-12 portfolio-item filter-card">
                    <table class="table table-fixed">
                        <thead>
                        <tr>
                            <th scope="col" class="col-3">#</th>
                            <th scope="col" class="col-3">nom de test</th>
                            <th scope="col" class="col-3">discription</th>
                            <th scope="col" class="col-3">salle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $tests = \App\Test::query()->where('professeur_id',$prof->professeur_id)->get() ; $i=0 @endphp
                        @foreach($tests as $t)
                            <tr>
                                <td scope="col" class="col-3">{{++$i}}</td>
                                <td scope="col" class="col-3">{{$t->nom}}</td>
                                <td scope="col" class="col-3">{{$t->discription}}</td>
                                <td scope="col" class="col-3">{{$t->salle}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @php $matiere = $prof->matiere ; $i=0 @endphp
                <div class="col-lg-12 portfolio-item filter-logo" style="display: none;">
                    <table class="table table-fixed">
                        <thead>
                        <tr>
                            <th scope="col" class="col-3">#</th>
                            <th scope="col" class="col-3">nom de matiere</th>
                            <th scope="col" class="col-3">Volume Horaire</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($matiere as $m)
                            <tr>
                                <td scope="col" class="col-3">{{++$i}}</td>
                                <td scope="col" class="col-3">{{$m->nom_matiere}}</td>
                                <td scope="col" class="col-3">{{$m->volume_horaire}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
    </section><!-- #portfolio -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container wow fadeIn">
            <div class="row about-container">

                <div class="container main-section">
                    <h4>Professeur</h4>
                    <div class="row justify-content-md-center">
                        <div class="col-lg-3 col-sm-4 col-12 text-center wow fadeInUp">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-primary">
                                    <i class="fa fa-magic" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="create-test/{{$prof->professeur_id}}" style="color:white;">create
                                            quiz</a></p></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12 text-center wow fadeInUp">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-warning">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="{{route('manager-test',['prof_id' => $prof])}}" style="color:white;">gerer
                                            les tests</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12 text-center wow fadeInUp">
                            <div class="row main-box-layout img-thumbnail">
                                <div class="col-lg-12 col-sm-12 col-12 box-icon-section bg-danger">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 box-text-section">
                                    <p><a href="#" style="color:white;">create qcm </a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #about -->


</main>

<!--==========================
  Footer
============================-->


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('lib/easing/easing.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
<script src="{{asset('lib/superfish/superfish.min.js')}}"></script>

<!-- Contact Form JavaScript File -->

<!-- Template Main Javascript File -->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

