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

    @if (isset($success)){{-- $info --}}
            <div class="row alert alert-info">
                    {{ $success }}
            </div>
        
    @endif
    {!! $links !!}

    @foreach($posts as $post)

            <article class="row bg-primary">
                <header>
                    {{ $post->titre }}
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
                       {{--  @foreach($tags as $tag) --}}
                            <span class="glyphicon glyphicon-paste">Aucun</span>
                        {{--  @endforeach --}}
                            <span class="glyphicon glyphicon-pencil"></span>
                            {{ $post->user->name }} le {!! $post->created_at->format('d-m-y') !!}
                    </em>
                </section>

            </article>

    @endforeach
 {!! $links !!}
@endsection