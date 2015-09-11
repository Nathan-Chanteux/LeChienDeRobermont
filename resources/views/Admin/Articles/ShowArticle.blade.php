@extends('admin')

@section('info')
    Gestion des articles
@endsection

@section('contenu')
@foreach ($listeArticles as $article)
<div class='show-article'>
    <h1>{{ $article->titre }}</h1>
    <div>
        <a class='button' href="{{ URL::asset('/admin/article/modification/'.$article->slug) }}">Modifier</a>
        <a class='button alert' href="{{ URL::asset('/admin/article/supprimer/'.$article->slug) }}">Supprimer</a>
    </div>
</div>
@endforeach
@endsection