 {{-- ************Pour acceder à tous les contenu du dossier public sur laravel ***********on utilise : {{ URL::asset('chemin') }} --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-theme.css') }}">
    <title>Teste</title>
</head>

<body>

    {{-- @yield('formulaire') --}}
    @yield('contenu')

    {{-- @yield('Resultats') --}}
   

</body>

</html>
