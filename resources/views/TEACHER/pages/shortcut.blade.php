@extends('TEACHER.layouts.main')

@section('contenu')
    <h1>Nous allons créer un shortcuts link des websites</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="shortcut" id="" placeholder="Entrer vos Liens">
        <button type="submit">Shorten URL</button>
    </form>
@endsection
