@extends('layout.layout')
@section('contenu')
<br>
<div class="col-sm-offset-2 col-sm-6">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Aucun</strong> <p>{{ $message }}</p>
    </div>
   @endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Liste des utilisateurs</h3>
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users-teste.create') }}"> Nouveau </a>
            </div>
            <br>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Actions</th>
                        {{-- <th></th>
                        <th></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{!! $user->id !!}</td>
                        <td class="text-primary">
                            <strong>{!! $user->name !!}</strong>
                        </td>
                       {{--  <td> <a class="btn btn-info" href="{{ route('users-teste.show',$user->id) }}">Voir</a></td>
                        <td> <a class="btn btn-primary" href="{{ route('users-teste.edit',$user->id) }}">Modifier</a></td> --}}
                       {{--  <td>{{ route('users-teste.show','voir',[$user->id],['class'=>'btn btn-success btn-block'])}}</td> --}}
                       {{--  <td>{{ route('users-teste.edit','modifier',[$user->id],['class'=>'btn btn-warning btn-block'])}}</td> --}}
                        <td>
                            {{-- <form action="{{ route('users-teste.destroy', $user->id ) }}" method="DELETE" role="form">

                                <input type="hidden" name="id_users" id="inputid_users" class="form-control id_users" value={!! $user->id !!}>

                                <button type="submit" class="btn btn-danger btn-block" onclick="confirm(' Voulez-vous vraiment effacer cet utilisateur ? ')">Supprimer</button>
                            </form> --}}
                           {{--  <a class="btn btn-danger" href="{{ route('users-teste.destroy', {$user->id} ) }}">Supprimer</a> --}}

                           <form action="{{ route('users-teste.destroy',$user->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('users-teste.show',$user->id) }}">Voir</a>
                            <a class="btn btn-primary" href="{{ route('users-teste.edit',$user->id) }}">Modifier</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                            {{--  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> --}}   
                        </form>
                        </td>
                       
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>

{{-- {{route('users-teste.create','Ajouter un utilisateur',[],['class'=>'btn btn-info pull-right']) }} --}}
{{ $links }}
</div>
@endsection