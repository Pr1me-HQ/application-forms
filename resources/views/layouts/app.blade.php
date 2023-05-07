<!DOCTYPE HTML>
<html>
	<head>
		<title>Elements Reference - Massively by HTML5 UP</title>
		<meta charset="utf-8" />

        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
                    <div class="major mt-4">
6
                    </div>
				<!-- Header -->
					<header id="header" class="mt-lg-5">
                        <h2><a href="#">Анкета для участия в хакатоне
                            </a></h2>
                        <div class="row">
                            <img width="200" class="float-left" src="/images/itrun.png">
                            <img width="200" class="float-right" src="/images/photo_2023.jpg">
                        </div>

{{--						<a href="/" class="logo">IT-LAb</a>--}}
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Главная</a></li>
							<li class="{{ (request()->is('register/alone')) ? 'active' : '' }}"><a href="{{ route('participant.create1') }}">Я хочу на Хакатон, но я один</a></li>
							<li class="{{ (request()->is('register/team')) ? 'active' : '' }}"><a href="{{ route('participant.create2') }}">Мы хотим на Хакатон - у нас команда!</a></li>
						</ul>
						<ul class="icons">
{{--							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>--}}
							<li><a href="https://www.facebook.com/ItRunTJ" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/itrun_tj" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
{{--							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>--}}
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
                                 @yield('content')
                            </section>
                    </div>
            </div>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>


