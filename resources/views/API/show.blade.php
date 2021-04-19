@extends('layout.layout')
@section('contenu')
<br>
<div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Fiche d'utilisateurs</h3>
        </div>
        <div class="panel-body">
            <p>Nom : {{ $user->name }}</p>
            <p>Email : {{ $user->email }}</p>
            @if($user->admin==1)
                Administrateur
            @else
                Utilisateur
            @endif

        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
    </div>
</div>
@endsection