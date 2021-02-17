@extends('layout.layout') @section('contenu')
<br>
<div class="col-sm-offset-4 col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Modification d'un utilisateurs</h3>
        </div>
        <div class="panel-body">

            <div class="col-sm-12">

                <form action="{{ route('users-teste.store') }}" method="post" class="form-horizontal panel" role="form">
                   @csrf

                    <div class=" form-group {!! $errors->has('name') ? 'has-error' :'' !!}">

                        <input type="text" name="name" id="inputname" class="form-control" value="{{ old('name') }}" placeholder="Nom"> {!! $errors->first('name','
                        <small class="help-block">:message</small>') !!}
                    </div>

                    <div class=" form-group {!! $errors->has('email') ? 'has-error' :'' !!}">

                        <input type="email" name="email" id="inputname" class="form-control" value="{{ old('email') }}"placeholder="Email"> {!! $errors->first('email','
                        <small class="help-block">:message</small>') !!}
                    </div>

                    <div class=" form-group {!! $errors->has('password') ? 'has-error' :'' !!}">

                        <input type="password" name="password" id="inputname" value="{{ old('password') }}" class="form-control" placeholder="Password"> {!! $errors->first('password','
                        <small class="help-block">:message</small>') !!}
                    </div>

                    <div class=" form-group">

                        <input type="password" name="password_confirmation" id="inputname" value="{{ old('password_confirmation') }}" class="form-control password_confirmation" placeholder="Password Confirmation"> 
                       
                    </div> 

                    <div class=" form-group">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="admin" value=1>
                                Administrateur
                            </label>
                        </div>
                    </div>




                    <div class="form-group ">
                        <div class="col-sm-10 col-sm-offset-2 ">
                            <button type="submit " class="btn btn-primary pull-right">Envoyer</button>
                        </div>
                    </div>
                </form>

            </div>


        </div>
       
    </div>

    <a href="javascript:history.back() " class="btn btn-primary ">
        <span class="glyphicon glyphicon-circle-arrow-left "></span>Retour
    </a>
    
</div>
@endsection