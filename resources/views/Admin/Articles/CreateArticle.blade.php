@extends('admin')

@section('contenu')
<form class='W1080' action="{{ URL::asset('/admin/article/add') }}" method="post" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" required="required" />
    </div>

    <div>
        <label for="RubriqueId">Rubrique de l'article</label>
        <select name="RubriqueId" id="RubriqueId">
            @foreach ($listeRubriques as $rubrique)
                <option value="{{ $rubrique->idRubriques }}">{{ $rubrique->titre }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="texte">Texte</label>
        <textarea name="texte" id="texte" required="required"></textarea>
    </div>

    <div>
        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo" accept="image/*" />
    </div>


    <div>
        <label for="home">Page d'accueil</label>
        <select name="home" id="home">
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>
    
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <input class="button" type="submit" />
</form>
@endsection