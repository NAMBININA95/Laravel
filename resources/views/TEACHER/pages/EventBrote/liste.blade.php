@extends('TEACHER.layouts.main')
@section('contenu')
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

		<li><a href="{{ route('event-brote.show',['brote'=>$eventbrote->id]) }}">{{ $eventbrote->titre }}</a></li>
	@endforeach




@endsection
