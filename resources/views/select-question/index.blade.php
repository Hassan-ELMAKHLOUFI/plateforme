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
    <link href="{{asset( 'css/style.css' )}}" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700')}}"
        rel="stylesheet">


    <!-- Bootstrap CSS File -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js')}}"></script>
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">

    <link rel="stylesheet"
          href="{{asset('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
    <!-- level-->
    <link rel="stylesheet" href="{{asset('css/form.css')}}">

    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}"/>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">


    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">

    <style>
        $green: #2ecc71;
        $red: #e74c3c;
        $blue: #3498db;
        $yellow: #f1c40f;
        $purple: #8e44ad;
        $turquoise: #1abc9c;


        h1 {
            color: $yellow;
            font-size: 4rem;
            text-transform: uppercase;
            display: block;
            width: 100%;
            text-align: center;

        @media screen and (max-width: 600px) {
            font-size: 3rem;
        }
        }

        p {
            color: $yellow;
            font-size: 1.2rem;
        // text-transform: uppercase;
            width: 100%;
            padding: 20px;
            text-align: center;
        }


        // Basic Button Style
           .btn {
               box-sizing: border-box;
               appearance: none;
               background-color: transparent;
               border: 2px solid $red;
               border-radius: 0.6em;
               color: $red;
               cursor: pointer;
               display: flex;
               align-self: center;
               font-size: 1rem;
               font-weight: 400;
               line-height: 1;
               margin: 20px;
               padding: 1.2em 2.8em;
               text-decoration: none;
               text-align: center;
               text-transform: uppercase;
               font-family: 'Montserrat', sans-serif;
               font-weight: 700;

        &:hover,
        &:focus {
             color: #fff;
             outline: 0;
         }
        }

        //BUTTON 1
        .first {
            transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
        &:hover {
             box-shadow: 0 0 40px 40px $red inset;
         }
        }

        //BUTTON 2
        .second {
            border-radius: 3em;
            border-color: $turquoise;
            color: #fff;
        background: {
            image: linear-gradient(to right,
            transparentize($turquoise, 0.4),
            transparentize($turquoise, 0.4) 5%,
            $turquoise 5%,
            $turquoise 10%,
            transparentize($turquoise, 0.4) 10%,
            transparentize($turquoise, 0.4) 15%,
            $turquoise 15%,
            $turquoise 20%,
            transparentize($turquoise, 0.4) 20%,
            transparentize($turquoise, 0.4) 25%,
            $turquoise 25%,
            $turquoise 30%,
            transparentize($turquoise, 0.4) 30%,
            transparentize($turquoise, 0.4) 35%,
            $turquoise 35%,
            $turquoise 40%,
            transparentize($turquoise, 0.4) 40%,
            transparentize($turquoise, 0.4) 45%,
            $turquoise 45%,
            $turquoise 50%,
            transparentize($turquoise, 0.4) 50%,
            transparentize($turquoise, 0.4) 55%,
            $turquoise 55%,
            $turquoise 60%,
            transparentize($turquoise, 0.4) 60%,
            transparentize($turquoise, 0.4) 65%,
            $turquoise 65%,
            $turquoise 70%,
            transparentize($turquoise, 0.4) 70%,
            transparentize($turquoise, 0.4) 75%,
            $turquoise 75%,
            $turquoise 80%,
            transparentize($turquoise, 0.4) 80%,
            transparentize($turquoise, 0.4) 85%,
            $turquoise 85%,
            $turquoise 90%,
            transparentize($turquoise, 0.4) 90%,
            transparentize($turquoise, 0.4) 95%,
            $turquoise 95%,
            $turquoise 100%);
            position: 0 0;
            size: 100%;
        }
        transition: background 300ms ease-in-out;

        &:hover {
             background-position: 100px;
         }
        }

    </style>

    <link href="{{asset('https://fonts.googleapis.com/css?family=Fira+Sans')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/selectStyle.css')}}">
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
        <nav id="sidebar" class="img" style="background-image: url(/public/images/stu.jpg);">
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

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Création des questions</h2>
            <section id="services">
                <div class="container wow fadeIn">
                    <div class="section-header">

                    </div>


                    <div class=" card-6" style="margin-left: -3.75rem;">
                        <div class="">
                            <?php $matiere_id = $test->matiere_id; ?>
                            <?php $professeur_id = $test->professeur_id; ?>
                            <?php $tests = DB::table('test')->where('matiere_id', $matiere_id)->where('test_id', '!=', $test->test_id)->where('professeur_id', $professeur_id)->get();?>
                            <form action="{{action('question@StoreSelected')}}" method="POST">
                                @csrf
                                @foreach($tests as $test1)

                                    <?php $qcms['qcms'] = DB::table('qcm')->where('test_id', $test1->test_id)->get();?>
                                    @foreach($qcms['qcms'] as $qcm)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="qcm[]" type="checkbox" value="{{$qcm->question_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px;">{{$qcm->question_text}}</span>
                                        </label><br>
                                        <br>



                                    @endforeach

                                    <?php $binaires['binaires'] = DB::table('binaire')->where('test_id', $test1->test_id)->get();?>

                                    @foreach($binaires['binaires'] as $binaire)

                                        <label class="switcher" style="margin-left:10px;">
                                            <input name="bin[]" type="checkbox" value="{{$binaire->binaire_id}}"/>
                                            <div class="switcher__indicator"></div>
                                            <span style="font-size: 15px;">{{$binaire->question_text}}</span>
                                        </label><br>
                                        <br>

                                    @endforeach






                                @endforeach
                                <input type="hidden" name="test_id" value="{{$test->test_id}}">
                                <div style="padding-left:100px;">
                                    <input type="submit" class="btn btn-info" value="ajouter">
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </section><!-- #services -->
        </div>

    </div>

</main>


<script src="{{asset('js/main.js')}}"></script>


</body>
</html>
