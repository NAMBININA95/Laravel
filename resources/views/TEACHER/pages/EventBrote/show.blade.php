@extends('TEACHER.layouts.main')
@section('contenu')


	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
{{--				<a href="{{ route('event-brote.create') }}">Ajouter</a>--}}
				<br>
				<p>{{ $event_brote->id }}  </p>
				<p>{{ $event_brote->titre }}  </p>
				<p>{{ $event_brote->lieu }}  </p>

				@if($event_brote->slug=="")
					<p>Aucun slug enregistrer dans la base de données  </p>
				@else
					<p>{{ $event_brote->slug }}  </p>
				@endif



				<form class="form form-inline-block form-supprimer"
					action="{{ route('event-brote.destroy',$event_brote->slug) }}"
					method="post"
					>

					{{--Poour empecher de faire
					 soumission par défaut d'un formulaire
					 on utilise ce event.preventDefault()
					 onsubmit="event.preventDefault()"
					 --}}
					@csrf
					@method('delete')
					<a class="btn btn-warning" href="{{ route('event-brote.edit',$event_brote->slug) }}">Modifier</a>
					<a class="btn btn-primary" href="{{ route('accueil')}}">Retour Liste</a>
					<button class="btn btn-danger effacer-event" type="submit" >Supprimer</button>
				</form>


			</div>
		</div>
	</div>



@endsection
