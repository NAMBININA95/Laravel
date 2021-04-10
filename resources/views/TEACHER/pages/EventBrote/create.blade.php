@extends('TEACHER.layouts.main')
@section('contenu')
	<style>
		.errors{
			color: red;
		}
	</style>

	<form action="{{ route('event-brote.store') }}" method="post">
		@csrf
		<input type="text" name="titre" id="" placeholder="Titre"><br>
		{!! $errors->first('titre','<span class="errors">:message<span>') !!}
		<br>
		<input type="text" name="lieu" id="" placeholder="Lieu"><br>
		<textarea name="description" id="" cols="30" rows="10" placeholder="Description de evenement"></textarea><br>
		<input type="date" name="date_event" id="" placeholder="Date evenement"><br>
		<input type="time" name="time_event" id="" placeholder="Date evenement"><br>

		<div class="mes-bouton">
			<button type="submit">Envoyer</button>
			<button type="reset">Annuler</button>
		</div>


	</form>

@endsection
