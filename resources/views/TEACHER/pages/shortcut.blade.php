@extends('TEACHER.layouts.main')

@section('contenu')
    <style>
        .alert-erros{
            color:red;
        }
    </style>
    <h1>Nous allons créer un shortcuts link des websites</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="link_origi" id="" placeholder="Entrer vos Liens" value="{{ old('link_origi') }}">
        {!! $errors->first('link_origi','<p class="alert-erros">:message</p>') !!}
{{--        <button type="submit">Shorten URL</button>--}}
    </form>
@endsection
