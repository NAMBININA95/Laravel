<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/eventbrote.css') }}">
{{--	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.css') }}">--}}

    <title>Cours Laravel par Georges Nambinina </title>
{{--    <title>Cours Laravel par @yield('author' ?? 'Georges Nambinina') </title>--}}
</head>
<body>
{{--@yield('sidebar')--}}

@include('TEACHER.shared._navbar')

<div class="container">

	@if(session()->has('notification.message'))
		<div class="alert alert-{{ session('notification.type') }}">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>{{ session()->get('notification.message') }}</strong>
			{{--<strong>Création Event</strong> {{ session('message') }} --}}
		</div>
	@endif


	@yield('contenu')

</div>



</body>
<script src="{{ asset('bootstrap/js/jqueryFrame.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script>
	$(document).ready(function () {
		//alert('Jquery mandea');
		// $('.effacer-event').submit(function () {
		// 	confirm('Etes-vous sur de vouloir supprimer cet évenement ? ')
		// })
	});

	$('.form-supprimer').submit(function() {
		//event.preventDefault();
		return confirm('Etes-vous sur de vouloir supprimer cet évenement ? ');

	});
</script>
</html>
