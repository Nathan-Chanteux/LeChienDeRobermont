@extends('admin')

@section('info')
    Modification de l'article '{{ $article->titre }}'
@endsection
@section('contenu')
<form action="{{ URL::asset('/admin/article/up') }}" method="POST" enctype="multipart/form-data">
    <div><label class='label' for="">Titre</label>
        <input type="text" name="titre" value="{{ $article->titre }}" /></div>
    <div><label class='label' for="text">Texte</label><textarea name="texte" id="text">{{ $article->texte }}</textarea></div>
    <div>
        <label class='label' for="rubriques_id">Rubrique de l'article</label>
        <select name="rubriques_id" id="RubriqueId">
            @foreach ($listeRubriques as $rubrique)
                <option @if($article->rubriques_id == $rubrique->id) selected='selected' @endif value="{{ $rubrique->id }}">{{ $rubrique->titre }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class='label' for="photo">Photo</label><div> {{ $article->photo }}</div>
        <input type="file" name="photo" id="photo" accept="image/*" />
    </div>


    <div>
        <label class='label' for="home">Page d'accueil</label>
        <select name="home" id="home">
            <option @if($article->home == 0) selected='selected' @endif value="0">Non</option>
            <option @if($article->home == 1) selected='selected' @endif value="1">Oui</option>
        </select>
    </div>
    
    <input type="hidden" name="slugArticle" value="{{ $article->slug }}">
    <input type="hidden" name="id" value="{{ $article->id }}">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    
    <input class="button" type="submit">
</form>
@endsection