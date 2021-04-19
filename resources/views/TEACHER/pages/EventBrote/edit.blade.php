@extends('TEACHER.layouts.main')
@section('contenu')
{{--	566AD0C1--}}

	<div class="container">
		<div class="row">
{{--			class="col-xs-6 col-sm-6 col-md-6 col-lg-6"--}}
			<div style="margin: auto;">
				<h1>Modification Event</h1>
				<form class="form" action="{{ route('event-brote.update',$event_brote->slug) }}" method="post">
					@csrf
					@method('put')

					@include('.TEACHER.shared.FormInhretence._eventbrote',['submitForm'=>'Modifier'])

					{{--<div class="btn-group">
						<button class="btn btn-success"  type="submit">Modifier</button>
					</div>--}}

					<a class="btn btn-primary" href="{{ route('accueil') }}">Retour </a>




				</form>
			</div>
		</div>
	</div>


	<br>
	<br>
@endsection
