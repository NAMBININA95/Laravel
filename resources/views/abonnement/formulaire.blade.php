@extends('../layout/layout') @section('formulaire')
<div class="container">

    <div class="row">

        <div style="margin:auto;" class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <legend>Formulaire</legend>
            <form class="form" action="abonnement-emails" method="post" accept-charset="UTF-8">
                @csrf {{-- {{ csrf_field() }} --}}
                <div class="form-group {!! $errors->has('emails') ? 'has-error' : '' !!}">
                    <input class="form-control" type="text" name="emails" id="" /> 
                    {!! $errors->first('emails','<small class="help-block">:message</small>') !!}
                </div>

                <button class="btn btn-success" type="submit">Send</button>
            </form>
        </div>


    </div>

</div>


@endsection