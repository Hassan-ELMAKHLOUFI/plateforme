<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Fashion Designer Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
    <link rel="stylesheet" href="/professeurLogin/css/flexslider.css" type="text/css" media="screen"/>
    <!-- Flexslider-CSS -->
    <link href="/professeurLogin/css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS -->
    <link href="/professeurLogin/css/style.css" rel='stylesheet' type='text/css'/><!-- Stylesheet-CSS -->
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
</head>
<body>
<h1>Professeur authentification</h1>
<div class="main-agile">

    <div class="content-wthree">
        <div class="about-middle">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="banner-bottom-2">
                                <div class="about-midd-main">
                                    <img class="agile-img" src="/professeurLogin/images/t1.jpg" alt=" "
                                         class="img-responsive">
                                </div>
                                <div class="new-account-form">
                                    <h2 class="heading-w3-agile">Login</h2>
                                    <form method="POST" action="{{ action('Auth\ProfauthController@professeurLogin') }}">
                                        @csrf
                                        <div class="inputs-w3ls">
                                            <p>Username</p>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <input pattern="[a-zA-Z]{4,255}"
                                                   title="aucun caractère spécial n'est autorisé 4 - 255 max"
                                                   id="username" type="text" name="username"
                                                   required autocomplete="off" autofocus
                                                   placeholder="Username">
                                        </div>
                                        <div class="inputs-w3ls">
                                            <p>Password</p>
                                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            <input pattern="[a-zA-Z0-9]{4,255}"
                                                   title="aucun caractère spécial n'est autorisé 4 - 255 max"
                                                   id="password" type="password"
                                                   class="@if(!empty(Session::get('error'))) is-invalid @endif"
                                                   name="password" required autocomplete="off" placeholder="Password">
                                        </div>
                                        <button type="submit">s'identifier</button>
                                    </form>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>
<script src="/professeurLogin/js/jquery.min.js"></script>

<!-- FlexSlider -->
<script defer src="/professeurLogin/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function () {

    });
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- FlexSlider -->


</body>
</html>
