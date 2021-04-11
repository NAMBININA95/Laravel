@extends('TEACHER.layouts.main')
@section('contenu')


	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
{{--				<a href="{{ route('event-brote.create') }}">Ajouter</a>--}}
				<br>
				<p>{{ $recup->id }}  </p>
				<p>{{ $recup->titre }}  </p>
				<p>{{ $recup->lieu }}  </p>


				<form class="form form-inline-block" action="{{ route('event-brote.destroy',$recup->id) }}" method="post">
					@csrf
					@method('delete')
					<a class="btn btn-warning" href="{{ route('event-brote.edit',$recup->id) }}">Modifier</a>
					<a class="btn btn-primary" href="{{route('accueil')}}">Retour Liste</a>
					<button class="btn btn-danger" type="submit">Supprimer</button>
				</form>


			</div>
		</div>
	</div>



@endsection
