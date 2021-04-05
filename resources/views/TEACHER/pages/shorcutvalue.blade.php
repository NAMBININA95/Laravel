@extends('TEACHER.layouts.main')

@section('contenu')
    <a href="{{ config('app.url')}}/{{ $shortcut }}">
        Laravel58/{{ $shortcut }}
    </a>
@endsection
