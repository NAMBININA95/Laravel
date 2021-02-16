@extends('layout.layout') 
@section('contenu')
<br>
<div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Modification d'un utilisateurs</h3>
        </div>
        <div class="panel-body">

            <div class="col-sm-12">

                <form action="{{ route('users-teste.update',$user->id) }}" method="post" class="form-horizontal panel" role="form">
                    
                    @csrf
                    @method('put')
                    {{-- <input type="hidden" name="id" value="{{ $users-teste->id }}"> --}}

                    <div class=" form-group {!! $errors->has('name') ? 'has-error' :'' !!}">

                        <input type="text" name="name" id="inputname" value="{{ $user->name }}" class="form-control" placeholder="Nom"> {!! $errors->first('name','
                        <small class="help-block">:message</small>') !!}
                    </div>

                    <div class=" form-group {!! $errors->has('email') ? 'has-error' :'' !!}">

                        <input type="email" name="email" value="{{ $user->email }}" id="inputname" class="form-control" placeholder="Email"> {!! $errors->first('email','
                        <small class="help-block">:message</small>') !!}
                    </div>

                    <!--   <div class=" form-group">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="admin" value=1 >
                                Administrateur
                            </label>
                        </div>
                    </div> -->




                    <div class="form-group ">
                        <div class="col-sm-10 col-sm-offset-2 ">
                            <button type="submit " class="btn btn-primary pull-right">Envoyer</button>
                        </div>
                    </div>
                </form>

            </div>


        </div>
        <a href="javascript:history.back() " class="btn btn-primary ">
            <span class="glyphicon glyphicon-circle-arrow-left "></span>Retour
        </a>
    </div>
</div>
@endsection