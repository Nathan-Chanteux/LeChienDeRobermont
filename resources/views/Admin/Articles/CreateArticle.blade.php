@extends('admin')

@section('info')
    Ajout d'un nouvel article
@endsection

@section('contenu')
<form action="{{ URL::asset('/admin/article/add') }}" method="post" enctype="multipart/form-data">
    <div>
        <label class='label' for="titre">Titre</label>
        <input type="text" name="titre" id="titre" required="required" />
    </div>

    <div>
        <label class='label' for="RubriqueId">Rubrique de l'article</label>
        <select name="RubriqueId" id="RubriqueId">
            @foreach ($listeRubriques as $rubrique)
                <option value="{{ $rubrique->id }}">{{ $rubrique->titre }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class='label' for="texte">Texte</label>
        <textarea name="texte" id="texte" required="required"></textarea>
    </div>

    <div>
        <label class='label' for="photo">Photo</label>
        <input type="file" name="photo" id="photo" accept="image/*" />
    </div>


    <div>
        <label class='label' for="home">Page d'accueil</label>
        <select name="home" id="home">
            <option value="0">Non</option>
            <option value="1">Oui</option>
        </select>
    </div>
    
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <input class="button" type="submit" />
</form>
@endsection