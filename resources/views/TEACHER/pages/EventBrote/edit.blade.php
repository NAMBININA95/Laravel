@extends('TEACHER.layouts.main')
@section('contenu')
	<style>
		.errors{
			color: red;
		}
	</style>

	<h1>Modification Event</h1>
	<form action="{{ route('event-brote.update',$recup->id) }}" method="post">
		@csrf
		@method('put')
		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre')?: $recup->titre }}"><br>
{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre')? old('titre'): $recup->titre }}"><br>--}}
{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre') ?? $recup->titre  }}"><br>   PHP 7--}}
{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
		{!! $errors->first('titre','<span class="errors">:message<span>') !!}
		<br>
		<input type="text" name="lieu" id="" placeholder="Lieu" value="{{ $recup->lieu }}"><br>
		<textarea name="description" id="" cols="30" rows="10" placeholder="Description de evenement" >{{ $recup->description }} </textarea><br>
		<input type="date" name="date_event" id="" value="{{ $recup->date_event->format('Y-m-d') }}" placeholder="Date evenement" type="date"><br>
		<input type="time" name="time_event" id=""  value="{{ $recup->time_event }}" placeholder="Date evenement"><br>

{{--		 echo date('Y-m-d');--}}

		<div class="mes-bouton">
			<button type="submit">Modifier</button>
		</div>

		<a href="{{ route('accueil') }}">Retour </a>


	</form>

@endsection
