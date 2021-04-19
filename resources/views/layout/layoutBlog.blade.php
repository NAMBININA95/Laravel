 {{-- ************Pour acceder à tous les contenu du dossier public sur laravel ***********on utilise : {{ URL::asset('chemin') }} --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
   {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">--}}
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-theme.css') }}">
    <style>
        textarea {
            resize: none;
        }
    </style>
    <title>Mon jolie Blog</title>
</head>

<body>

    <header class="jumbotron">
        <div class="container">
            <h1 class="page-header"><a href="{{ route('post.index')}}">Mon Jolie Blog</a></h1>
            @yield('header')

        </div>
    </header>

    <div class="container">
        @yield('contenu')
    </div>



</body>

</html>
