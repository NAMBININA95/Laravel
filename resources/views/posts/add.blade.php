@extends('layout.layoutBlog')

@section('contenu')
  <br>
   

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    
  <div class="col-sm-offset-3 col-sm-6">
      <div class="panel panel-info">
          <div class="panel-heading">Ajout d'un article</div>
          <div class="panel-body">
                <form class="form" action="{{ route('post.store') }}" method="POST">
                    @csrf
                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                <input type="text" name="titre"  class="form-control" placeholder="Titre "id="" />
                                {!! $errors->first('titre','<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                                <textarea name="contenu"  class="form-control" placeholder="Contenu" id="" rows="20"></textarea>
                                {!! $errors->first('contenu','<small class="help-block">:message</small>') !!}
                        </div>

                        <button type="submit" class="btn btn-info pull-right ">Envoyer</button>
                </form>

          </div>

      </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>
            Retour
        </a>
  </div>


@endsection
