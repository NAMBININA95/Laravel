@extends('layout.layoutBlog')
@section('header') 
        @if(Auth::check())
            <div class="btn-group pull-right">
               
                <form class="form" action="{{ route('logout') }}" method="post">
                    <a href="{{ route('post.create') }}" class="btn btn-info">Créer un article</a>
                    @csrf
                    <button type="submit"  class="btn btn-danger">Deconnexion</button>
                </form>
               {{--  <a href="{{ route('logout') }}" class="btn btn-danger">Deconnexion</a> --}}
            </div>
        @else
                <a href="{{ route('login') }}" class="btn btn-info pull-right">Se connecter</a>
        @endif
@endsection

@section('contenu')

{{--    <div class="container">--}}
{{--        <h1>Test pour ma ManyToMany</h1>--}}
{{--        @foreach($articles->tags as $tag)--}}
{{--            {{ $tag->id }}--}}

{{--        @endforeach--}}
{{--    </div>--}}


@if (isset($info)){{-- $info --}}
            <div class="row alert alert-info">
                    {{ $info }}
            </div>
        
    @endif
    {!! $links !!}

    @foreach($postss as $post)

            <article class="row bg-primary">
                <header>
                    <h1>{{ $post->titre }}

{{--                        @foreach($post->tags as $tag)--}}

{{--                            <a class="btn btn-xs btn-info" href="{{ route('post/tag/'.$tag->tag_url) }}">{{ $tag->tag }}</a>--}}
{{--                            --}}
{{--                        @endforeach--}}


                    </h1>
                </header>
                <hr>
                <section>
                    <p>{{ $post->contenu }}</p>

                    @if (Auth::check() and Auth::user()->admin)

                        <form action="{{ route('post.destroy',['id'=>$post->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit" onclick="confirm('voulez-vraiment supprimer cet article ? ');">supprimer</button>
                        </form>
                        
                    @endif

                    <em class="pull-right">
                            <span class="glyphicon glyphicon-pencil"></span>
				  {{ $post->user->name }} le {!! $post->created_at->format('d-m-y') !!}
{{--                            {{ $post->user->name }} le {!! $post->created_at->format('d-m-y') !!}--}}
                    </em>
                </section>

            </article>

    @endforeach
 {!! $links !!}
@endsection
