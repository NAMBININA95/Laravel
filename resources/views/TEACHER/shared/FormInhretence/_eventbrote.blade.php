<div class="form-group {{ $errors->has('titre')? 'has-error has-feedback':'' }}  ">
	<label for="titre">Titre</label>
	<input class="form-control" type="text" name="titre" id="titre" placeholder="Titre" value="{{ old('titre')?: $event_brote->titre }}">
	{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre')? old('titre'): $recup->titre }}"><br>--}}
	{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ old('titre') ?? $recup->titre  }}"><br>   PHP 7--}}
	{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
	{{--		<input type="text" name="titre" id="" placeholder="Titre" value="{{ $recup->titre }}"><br>--}}
	<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	{!! $errors->first('titre','<span class="help-block">:message<span>') !!}

</div>



	 <div class="form-group {{ $errors->has('lieu')? 'has-error has-feedback':'' }} ">

	<label for="lieu">Lieu</label>
	<input type="text" class="form-control" name="lieu" id="lieu" placeholder="Lieu" value="{{  old('lieu')?: $event_brote->lieu }}">
	<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	{!! $errors->first('lieu','<span class="help-block">:message<span>') !!}

</div>

<div class="form-group {{ $errors->has('description')? 'has-error' : '' }}">
	<label for="description ">Description</label>
	<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Description de evenement" >{{  old('description')?: $event_brote->description }} </textarea>
	{!! $errors->first('description','<span class="help-block">:message<span>') !!}
</div>

<div class="form-group {{ $errors->has('date_event')? 'has-error':'' }}">
	<label for="date_event">Date</label>

	@if( $event_brote->date_event=="" )
		<input type="date" class="form-control" name="date_event" id="date_event" value="{{  old('date_event') }}" placeholder="Date evenement">
		{!! $errors->first('date_event','<span class="help-block">:message<span>') !!}
	@else
		<input type="date" class="form-control" name="date_event" id="date_event" value="{{  old('date_event')?: $event_brote->date_event->format('Y-m-d') }}" placeholder="Date evenement">
		{!! $errors->first('date_event','<span class="help-block">:message<span>') !!}
	@endif


</div>

<div class="form-group {{ $errors->has('time_event')? 'has-error':'' }}">
	<label for="time_event">Heure</label>
	<input type="time" class="form-control" name="time_event" id="time_event"  value="{{  old('time_event')?: $event_brote->time_event }}" placeholder="Date evenement">
	{!! $errors->first('time_event','<span class="help-block">:message<span>') !!}

</div>


	<button class="btn btn-success"  type="submit">{{ $submitForm }}</button>


{{--		 echo date('Y-m-d');--}}
