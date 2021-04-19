@extends('TEACHER.layouts.main')
@section('contenu')
	<style>
		.errors{
			color: red;
		}
	</style>

{{--	<form action="{{ route('event-brote.store') }}" method="post">--}}

	<div class="container">
		<div class="row">
			{{--			class="col-xs-6 col-sm-6 col-md-6 col-lg-6"--}}
			<div style="margin: auto;">
				<h1>Nouveau Event</h1>
				<form class="form" action="{{ route('event-brote.store') }}" method="post">
					@csrf
					{{--<div class="form-group {{ $errors->has('titre')? 'has-error' : '' }}">
						<label for="titre">Titre</label>
						<input class="form-control" type="text" name="titre" id="titre" placeholder="Titre" value="{{ old('titre') ?? '' }}">--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre')? old('titre'): $recup->titre }}"><br>--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre') ?? $recup->titre  }}"><br>   PHP 7--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
					{{--	{!! $errors->first('titre','<span class="help-block">:message<span>') !!}

					</div>

					<div class="form-group {{ $errors->has('titre')? 'has-error' : '' }}">
						<label for="lieu">Lieu</label>
						<input type="text"  class="form-control" name="lieu" id="lieu" placeholder="Lieu" value="{{ old('lieu') ?? '' }}">
						{!! $errors->first('lieu','<span class="help-block">:message<span>') !!}
					</div>

					<div class="form-group {{ $errors->has('titre')? 'has-error' : '' }}">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Description de evenement" ></textarea><br>
						{!! $errors->first('description','<span class="help-block">:message<span>') !!}
					</div>

					<div class="form-group {{ $errors->has('titre')? 'has-error' : '' }}">
						<label for="date_event">Date</label>
						<input type="date" class="form-control" name="date_event" id="date_event" value="{{ old('date_event') ?? '' }}" placeholder="Date evenement">
						{!! $errors->first('date_event','<span class="help-block">:message<span>') !!}
					</div>

					<div class="form-group {{ $errors->has('titre')? 'has-error' : '' }}">
						<label for="time_event">Heure</label>
						<input type="time" class="form-control" name="time_event" id="time_event"  value="{{ old('time_event') ?? '' }}" placeholder="Date evenement">
						{!! $errors->first('time_event','<span class="help-block">:message<span>') !!}
					</div>--}}

					{{--		 echo date('Y-m-d');--}}


					@include('TEACHER.shared.FormInhretence._eventbrote',['submitForm'=>'Envoyer'])

{{--						<button class="btn btn-success" type="submit">Envoyer</button>--}}
						<button class="btn btn-warning" type="reset">Annuler</button>


					<a class="btn btn-primary" href="{{ route('accueil') }}">Retour </a>




				</form>
			</div>
		</div>
	</div>
	<br>


@endsection
