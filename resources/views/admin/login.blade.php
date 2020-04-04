<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="keywords"
          content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="/adminLogin/css/style.css" type="text/css" media="all"/>
    <!-- Style-CSS -->
    <link href="/adminLogin/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link
        href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- //web-fonts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
<div class="main-bg">
    <!-- title -->
    <h1>Latest Login Form</h1>
    <!-- //title -->
    <!-- content -->
    <div class="sub-main-w3">
        <div class="bg-content-w3pvt">
            <div class="top-content-style">
                <img src="/adminLogin/images/user.jpg" alt=""/>
            </div>
            <form method="POST" action="{{ action('Auth\AdminController@adminLogin') }}">
                @csrf
                <p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
                <div class="input">
                    <input pattern="[a-zA-Z]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max"
                           id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"
                           required autocomplete="off" autofocus placeholder="Username">

                    <span class="fa fa-envelope"></span>
                </div>
                <div class="input">
                    <input pattern="[a-zA-Z0-9]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max"
                           id="password" type="password"
                           class="form-control @if(!empty(Session::get('error'))) is-invalid @endif" name="password"
                           required autocomplete="off" placeholder="Password">

                    <span class="fa fa-unlock"></span>
                </div>
                <span style="color: red;" class="invalid-feedback" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
                <button type="submit" class="btn submit">
                    <span class="fa fa-sign-in"></span>
                </button>
            </form>
        </div>
    </div>
    <!-- //content -->

</div>
</body>

</html>
