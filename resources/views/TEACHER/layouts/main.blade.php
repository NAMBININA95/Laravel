<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
{{--	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.css') }}">--}}
	<link rel="stylesheet" href="{{ asset('css/eventbrote.css') }}">
    <title>Cours Laravel par Georges Nambinina </title>
{{--    <title>Cours Laravel par @yield('author' ?? 'Georges Nambinina') </title>--}}
</head>
<body>
{{--@yield('sidebar')--}}

@include('TEACHER.shared._navbar')

@yield('contenu')


</body>
{{--@yield('myscriptJs')--}}
</html>
