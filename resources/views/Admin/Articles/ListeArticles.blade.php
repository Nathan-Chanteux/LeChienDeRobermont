@foreach ($listeArticles as $article)
<article>
    <h1>{{ $article->titre }}</h1>
    <div>
        <a href="{{ URL::asset('/admin/article/modification/'.$article->slug) }}">Modifier</a>
        <a href="{{ URL::asset('/admin/article/supprimer/'.$article->slug) }}">Supprimer</a>
    </div>
</article>
@endforeach