<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Llano Runners - San Juan de los Morros</title>
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	</head>
	<body>
		<header id="header">
			@yield('content-header')
		</header><!-- /header -->

		<section class="content">
			@yield('content')
		</section>
	</body>
</html>