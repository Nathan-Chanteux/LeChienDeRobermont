@extends('admin')

@section('contenu')
@foreach ($listeArticles as $article)
<div>
    <h1>{{ $article->titre }}</h1>
    <div>
        <a href="{{ URL::asset('/admin/article/modification/'.$article->slug) }}">Modifier</a>
        <a href="{{ URL::asset('/admin/article/supprimer/'.$article->slug) }}">Supprimer</a>
    </div>
</div>
@endforeach
@endsection