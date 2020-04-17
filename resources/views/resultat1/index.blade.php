@php
    $s = \App\Session::query()->where('session_id',$session)->first();
    $etudiant = \App\Etudiant::query()->where('etudiant_id',$s->etudiant_id)->first();
    session()->put('end','true');
@endphp
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
    <title>{{$etudiant->nom}}</title>
    <!-- Fontfaces resultat/css-->
    <link href="{{asset('resultat1/css/font-face.resultat/css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/font-awesome-4.7/resultat/css/font-awesome.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{asset('resultat1/vendor/font-awesome-5/resultat/css/fontawesome-all.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{asset('resultat1/vendor/mdi-font/resultat/css/material-design-iconic-font.min.css')}}"
          rel="stylesheet" media="all">
    <!-- Bootstrap resultat/css-->
    <link href="{{asset('resultat1/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- resultat/vendor resultat/css-->
    <link href="{{asset('resultat1/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}"
          rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('resultat1/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <!-- Main resultat/css-->
    <link href="{{asset('resultat1/css/theme.css')}}" rel="stylesheet" media="all">
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="{{asset('resultat1/images/logo.png')}}" alt="CoolAdmin"/>
                    </a>
                </div>

                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{$etudiant->nom." ".$etudiant->prenom}}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="content">
                                        <h5 class="name">
                                            <a>{{$etudiant->nom." ".$etudiant->prenom}}</a>
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
                        <h1 class="title-4">vos resultat
                            <span>{{$etudiant->nom." ".$etudiant->prenom }}</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- STATISTIC-->
        <section class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3" style="margin-left: 60px;">
                        <div class="overview-item overview-item--c2">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>Note </h2>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <h1 style="color: white; text-align: center;margin-top: 20px;">{{$somme}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" style="margin-left: 60px;">
                        <div class="overview-item overview-item--c3">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                    <div class="text">
                                        <h2>correct</h2>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <h3 style="color: white; text-align: center;margin-top: 20px;">{{$vrai}}
                                        question</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" style="margin-left: 60px;">
                        <div class="overview-item overview-item--c4">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                    <div class="text">
                                        <h2>faux</h2>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <h3 style="color: white; text-align: center;margin-top: 20px;">{{$faux}}
                                        question</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- END STATISTIC-->

    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">statistics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <!-- CHART-->
                    <div class="statistic-chart-1">
                        <h3 class="title-3 m-b-30">vos test </h3>
                        <div class="chart-wrap">
                            <canvas id="widgetChart5"></canvas>
                        </div>
                        <div class="statistic-chart-1-note">
                            <span class="big">30 test</span>
                        </div>
                    </div>
                    <!-- END CHART-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">vos meilleur note</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                <tr>
                                    <td> java</td>
                                    <td>19/20</td>
                                </tr>
                                <tr>
                                    <td>php</td>
                                    <td>17/20</td>
                                </tr>
                                <tr>
                                    <td>algebre</td>
                                    <td>16/20</td>
                                </tr>
                                <tr>
                                    <td>html</td>
                                    <td>15.5/20</td>
                                </tr>
                                <tr>
                                    <td>analyse</td>
                                    <td>12/20</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TOP CAMPAIGN-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- CHART PERCENT-->
                    <div class="chart-percent-2">
                        <h3 class="title-3 m-b-30">pourcentage des correct et faux reponse %</h3>
                        <div class="chart-wrap">
                            <canvas id="percent-chart2"></canvas>
                            <div id="chartjs-tooltip">
                                <table></table>
                            </div>
                        </div>
                        <div class="chart-info">
                            <div class="chart-note">
                                <span class="dot dot--blue"></span>
                                <span>correct</span>
                            </div>
                            <div class="chart-note">
                                <span class="dot dot--red"></span>
                                <span>faux</span>
                            </div>
                        </div>
                    </div>
                    <!-- END CHART PERCENT-->
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC CHART-->

    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">data table</h3>

                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>

                                <th>name test</th>
                                <th>question</th>
                                <th>reponse</th>
                                <th>correcte reponse</th>
                                <th>note</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="tr-shadow">

                                <td>java</td>
                                <td>
                                    <span class="block-email">heritage</span>
                                </td>
                                <td class="desc">implement</td>
                                <td>extend</td>
                                <td>
                                    <span class="status--process">0</span>
                                </td>
                            </tr>
                            <tr class="tr-shadow">
                                <td>java</td>
                                <td>
                                    <span class="block-email">heritage</span>
                                </td>
                                <td class="desc">implement</td>
                                <td>extend</td>
                                <td>
                                    <span class="status--process">0</span>
                                </td>
                            </tr>
                            <tr class="tr-shadow">
                                <td>java</td>
                                <td>
                                    <span class="block-email">heritage</span>
                                </td>
                                <td class="desc">implement</td>
                                <td>extend</td>
                                <td>
                                    <span class="status--process">0</span>
                                </td>

                            </tr>
                            <tr class="tr-shadow">

                                <td>java</td>
                                <td>
                                    <span class="block-email">heritage</span>
                                </td>
                                <td class="desc">implement</td>
                                <td>extend</td>
                                <td>
                                    <span class="status--process">0</span>
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END DATA TABLE-->


</div>

</div>

<!-- Jquery JS-->
<script src="{{asset('resultat1/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('resultat1/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- resultat1/vendor JS       -->
<script src="{{asset('resultat1/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('resultat1/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('resultat1/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('resultat1/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('resultat1/vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('resultat1/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
