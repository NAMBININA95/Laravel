@extends('TEACHER.layouts.main')
@section('contenu')
	<style>
		.errors{
			color: red;
		}
	</style>
{{--	566AD0C1--}}

	<div class="container">
		<div class="row">
{{--			class="col-xs-6 col-sm-6 col-md-6 col-lg-6"--}}
			<div style="margin: auto;">
				<h1>Modification Event</h1>
				<form class="form" action="{{ route('event-brote.update',$recup->id) }}" method="post">
					@csrf
					@method('put')
					<div class="form-group {{ $errors->has('titre')? 'has-error':'' }}">
						<label for="titre">Titre</label>
						<input class="form-control" type="text" name="titre" id="titre" placeholder="Titre" value="{{ old('titre')?: $recup->titre }}">
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre')? old('titre'): $recup->titre }}"><br>--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre') ?? $recup->titre  }}"><br>   PHP 7--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
						{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
						{!! $errors->first('titre','<span class="help-block">:message<span>') !!}

					</div>

					<div class="form-group">
						<label for="lieu">Lieu</label>
						<input type="text" class="form-control" name="lieu" id="lieu" placeholder="Lieu" value="{{ $recup->lieu }}">

					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Description de evenement" >{{ $recup->description }} </textarea>
					</div>

					<div class="form-group">
						<label for="date_event">Date</label>
						<input type="date" class="form-control" name="date_event" id="date_event" value="{{ $recup->date_event->format('Y-m-d') }}" placeholder="Date evenement">

					</div>

					<div class="form-group">
						<label for="time_event">Heure</label>
						<input type="time" class="form-control" name="time_event" id="time_event"  value="{{ $recup->time_event }}" placeholder="Date evenement">

					</div>

					{{--		 echo date('Y-m-d');--}}

					<div class="btn-group">
						<button class="btn btn-success"  type="submit">Modifier</button>

					</div>
					<a class="btn btn-primary" href="{{ route('accueil') }}">Retour </a>




				</form>
			</div>
		</div>
	</div>


	<br>
	<br>
@endsection
