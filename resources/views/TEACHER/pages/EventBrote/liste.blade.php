@extends('TEACHER.layouts.main')
@section('contenu')


	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<h1>Il y a {{ $liste->count() }} {{ str_plural('Evenement', $liste->count() ) }}</h1>
				<hr>
				<br>

				@if($liste->count()>0)
					@foreach($liste as $eventbrote)
						{{--<h1>{{ $inona }}</h1>
                                <p>{{ $eventbrote->titre }}</p>
                                <p>{{ $eventbrote->description }}</p>
                                <p>{{ $eventbrote->lieu }}</p>
                                <p>{{ $eventbrote->date_event }}</p>
                                <p>{{ $eventbrote->time_event }}</p>
                                @if(!$loop->last)
                                    <hr>
                                @endif--}}

						<li><a href="{{ route('event-brote.show',$eventbrote->slug) }}">{{ $eventbrote->titre }}</a></li>
					@endforeach
						<hr>
					{{ $liste->links('vendor.pagination.default') }}

				@else
					<h6>Aucun evenement</h6>
				@endif

			</div>
		</div>
	</div>





@endsection
