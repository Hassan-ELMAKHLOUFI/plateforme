<?php
use Illuminate\Support\Facades\DB;
$etudiant = \App\Etudiant::findOrFail($data['s']->etudiant_id);
$filiere = \App\filiere::findOrFail($etudiant->filiere_id);
$niveau = \App\Niveau::findOrfail($etudiant->niveau_id);
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Bienvenue {{$data['s']->username}}</title>

    <!-- Fontfaces CSS-->
    <link href="/resultat1/css/font-face.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/resultat1/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/resultat1/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
          media="all">
    <link href="/resultat1/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/resultat1/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/resultat1/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="/resultat1/images/logo.png" alt="CoolAdmin"/>
                    </a>
                </div>

                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="/resultat1/images/icon/avatar-01.jpg" alt="{{$etudiant->nom." ".$etudiant->prenom}}"/>
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{$etudiant->nom." ".$etudiant->prenom}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="/resultat1/images/icon/avatar-01.jpg"
                                                 alt="{{$etudiant->nom." ".$etudiant->prenom}}"/>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">j{{$etudiant->nom." ".$etudiant->prenom}}</a>
                                        </h5>
                                        <span class="email">{{$etudiant->email_address}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{route('session.logout')}}">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->


    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Bienvenu
                            <span>{{$etudiant->nom}}</span>
                        </h1>
                        <p>etudiant de filiere {{$filiere->nom." niveau ".$niveau->nom}}</p>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->


        <section class="statistic statistic2">
            <div class="container">
                <h1 class="title-4" style="margin-bottom: 40px; text-align: center;">
                    <span>les tests disponible pour la filiere : {{$filiere->nom}} , niveau : {{$niveau->nom}}</span>
                </h1>
                <?php  $tests = DB::table('test')->where('test_id', '=', $data['s']->test_id)->get();
                        $color = array('danger','warning','primary','success');
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                            <div class="au-card-title"
                                 style="background-image:url({{asset('resultat1/images/bg-title-01.jpeg')}})">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                <h3>
                                    <i class="zmdi zmdi-account-calendar"></i>{{date("d F ,Y")}}</h3>

                            </div>
                            <div class="au-task js-list-load au-task--border">
                                <div class="au-task__title">
                                    <p>Tests pour {{$etudiant->nom." ".$etudiant->prenom}}</p>
                                </div>
                                @foreach ($tests as $test)
                                    <div class="au-task-list js-scrollbar3">
                                        <div class="au-task__item au-task__item--{{$color[rand(0,count($color)-1)]}}">
                                            <div class="au-task__item-inner">
                                                <h5 class="task">
                                                    <a href="/question/{{$test->test_id}}/{{$data['s']->session_id}}">{{ $test->nom }}</a>
                                                </h5>
                                                <span class="time">{{date("H A")}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </div>

</div>

<!-- Jquery JS-->
<script src="/resultat1/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/resultat1/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/resultat1/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="/resultat1/vendor/slick/slick.min.js">
</script>
<script src="/resultat1/vendor/wow/wow.min.js"></script>
<script src="/resultat1/vendor/animsition/animsition.min.js"></script>
<script src="/resultat1/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="/resultat1/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/resultat1/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="/resultat1/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/resultat1/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/resultat1/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/resultat1/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="/resultat1/js/main.js"></script>

</body>

</html>
<!-- end document-->
