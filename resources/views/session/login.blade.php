<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Head -->

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Meta-Tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- //Meta-Tags -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="/sessionLogin/css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="/sessionLogin/css/font-awesome.min.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
	<div class="layer">

		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="{{route('session.login')}}"><span class="fa fa-key"></span>Session</a></h1>
			</div>
			<div class="links">
				<ul class="links-unordered-list">
					<li class="active">
						<a href="#" class="">Login</a>
					</li>
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Register</a>
					</li>
					<li class="">
						<a href="#" class="">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content-w3ls">
			<br>
            <br>
            <br>
			<div class="content-bottom">
                <form method="POST" action="{{ action('Auth\SessionController@sessionLogin') }}">
                    @csrf
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
                            <input pattern="[a-zA-Z ]{4,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="off" autofocus placeholder="Username">
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
                            <input pattern="[a-zA-Z0-9]{1,255}" title="aucun caractère spécial n'est autorisé 4 - 255 max" id="password" type="password" class="form-control @if(!empty(Session::get('error'))) is-invalid @endif" name="password" required autocomplete="off" placeholder="Password">
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
						</div>
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">s'identifier</button>
					</div>

				</form>
			</div>
		</div>
    </div>
</section>

</body>
<!-- //Body -->
</html>
