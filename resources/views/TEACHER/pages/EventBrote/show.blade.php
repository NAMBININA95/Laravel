@extends('TEACHER.layouts.main')
@section('contenu')



	<a href="{{ route('event-brote.create') }}">Ajouter</a>
	<br>
	<hr>

			<p>{{ $recup->id }}  </p>
			<p>{{ $recup->titre }}  </p>
			<p>{{ $recup->lieu }}  </p>

	<a href="{{ route('event-brote.edit',$recup->id) }}">Modifier</a>|
	<form action="{{ route('event-brote.destroy',$recup->id) }}" method="post">
		@csrf
		@method('delete')
		<button class="btn btn-danger" type="submit">Supprimer</button>
	</form>
			<a href="{{route('accueil')}}">Retour Liste</a>

@endsection
