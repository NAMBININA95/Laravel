@extends('TEACHER.layouts.main')

@section('contenu')
    <style>
        .blink{
            background-color: orange;
        }
    </style>

{{--    <h1>{{ count($articles) }} Articles</h1>--}}
    <h1>{{ $articles->count() }} Articles</h1>
    @foreach($articles as $art)

{{--            Attention le variable loop n'est accessible que dans le boucle car appartient à la boucle--}}
            <article class="{{ $loop->index%2==0 ? 'blink':'' }}">
                <p>{{ $art->titre }}</p>
                <p>{{ $art->contenu }}</p>
                <p>{{ $art->user_id }}</p>
                <h5>Ce articles a été créé le {{ $art->created_at->format('d/m/Y H:i') }}</h5>
{{--                <h5>Ce articles a été créé le {{ new DateTime()->format('d/m/Y', 'H:i') }}</h5>--}}

            </article>
            @if(!$loop->last)
                <hr>
            @endif


    @endforeach

    @endsection
