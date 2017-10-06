<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Llanos Runners | Panel de administracion</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	</head>
	<body>
		<div class="admin-header">
			<img src="{{ asset('img/logo_llanorunners.png') }}" width="250px" alt="Logo Llanorunners">


			<nav>
				<a href="{{ route('competitor.index') }}" title="">Competidores</a>
				<a href="{{ route('register') }}">Registrar Usuario</a>
				<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
			</nav>
			
			<h2>@yield('title')</h2>

			@include('flash::message')
		</div>	

		<section>
			@yield('admin-content')
		</section>

		<script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	</body>
</html>