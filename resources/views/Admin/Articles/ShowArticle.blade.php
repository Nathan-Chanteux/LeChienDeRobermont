@extends('admin')
<!-- 
    \resources\views\Admin\Articles\EditArticle.blade.php
    Etant le template Admin
    Vue permettant d'afficher la liste d'article pouvant-être modifier/supprimer
    @params: array $listeArticles[string $article->slug, string $article->titre]
 -->
@section('info')
    Gestion des articles
@endsection

@section('contenu')
@foreach ($listeArticles as $article)
<div class='show-article'>
    <h1>{{ $article->titre }}</h1>
    <div>
        <!-- Route: '/admin/article/modification/{slugArticle}'   @params: $article->slug  -->
        <a class='button' href="{{ URL::asset('/admin/article/modification/'.$article->slug) }}">Modifier</a>
        <!-- Route: '/admin/article/supprimer/{slugArticle}'   @params: $article->slug  -->
        <a class='button alert' href="{{ URL::asset('/admin/article/supprimer/'.$article->slug) }}">Supprimer</a>
    </div>
</div>
@endforeach
@endsection