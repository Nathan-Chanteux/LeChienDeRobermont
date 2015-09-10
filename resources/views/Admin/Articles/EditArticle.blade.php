@extends('admin')

@section('contenu')
<form class="W1080" action="{{ URL::asset('/admin/article/up') }}">
    <div><label for="">Titre</label>
        <input type="text" name="titre" value="{{ $article->titre }}" /></div>
    <div><label for="">Texte</label><textarea name="" id="">{{ $article->texte }}</textarea></div>
    <div>
        <label for="RubriquesId">Rubrique de l'article</label>
        <select name="RubriquesId" id="RubriqueId">
            @foreach ($listeRubriques as $rubrique)
                <option @if($article->RubriquesId == $rubrique->idRubriques) selected='selected' @endif value="{{ $rubrique->idRubriques }}">{{ $rubrique->titre }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="photo">Photo : {{ $article->photo }}</label>
        <input type="file" name="photo" id="photo" accept="image/*" />
    </div>


    <div>
        <label for="home">Page d'accueil</label>
        <select name="home" id="home">
            <option @if($article->home == 0) selected='selected' @endif value="0">Non</option>
            <option @if($article->home == 1) selected='selected' @endif value="1">Oui</option>
        </select>
    </div>
    
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    
    <input class="button" type="submit">
</form>
@endsection