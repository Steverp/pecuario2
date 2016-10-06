<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title', 'Default') | Panel de Administracion</title>
		<link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css") }}">
	</head>
	<body>
		@include('admin.template.partials.nav')
		<section>
			@yield('content')
		</section>
	</body>
	<script src="{{ asset("/js/jquery.min.js") }}"></script>
	<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
</html>