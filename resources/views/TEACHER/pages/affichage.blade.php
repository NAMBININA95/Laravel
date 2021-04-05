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
                <p>{{ $art->fake_titre }}</p>
{{--                <p>{{ $art->user_id }}</p>--}}
                <p>{!!  verif_nbre_paire($art)  !!}</p> {{-- Ceci est dans files helpers.php seulement des fonctions sans classe --}}
                <h5>Ce articles a été créé le {!! Testes_Helpers::format_dates($art->created_at) !!}</h5>  {{-- Ceci est dans fichier Helpers/Testes_Helpers.php seulement classe avec des méthodes statics --}}
{{--                <h5>Ce articles a été créé le {{ Testes_Helpers::format_dates($art->created_at) }}</h5>--}}
{{--                <h5>Ce articles a été créé le {{ format_dates($art->created_at) }}</h5>--}}
{{--                <h5>Ce articles a été créé le {{ $art->created_at->format('d/m/Y H:i') }}</h5>--}}
{{--                <h5>Ce articles a été créé le {{ new DateTime()->format('d/m/Y', 'H:i') }}</h5>--}}

            </article>
            @if(!$loop->last)
                <hr>
            @endif


    @endforeach

    @endsection
