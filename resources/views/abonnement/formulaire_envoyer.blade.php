@extends('../layout/layout') 

@section('formulaire')

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="alert alert-success alert-dismissable">Vos données sont envoyer avec succès</h1>
            <a class="btn btn-info " href="{{ route('formulaire_abonner_get') }}">Retour</a>
        </div>

    </div>

</div>
@endsection