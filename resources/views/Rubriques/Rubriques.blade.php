@extends('app')

@section('contenu')
<div id="pages" class="trans" style="width: 9096px; right: 0%; height: 2188px;">
@foreach ($listeRubriques as $rubriques)
@if ($rubriques->idRubriques == 1 )
<section id="section1" class="page-systeme page-accueil  page-actuelle" style="width: 1516px; min-height: 796px;">
    <h1 class="text-center transform stroke">Le <span class="grand">chien</span> <br>de Robermont</h1>
    <p class="text-center transform">ASBL - Education canine</p>
    @foreach ($listeArticles as $articles)
    @if($articles->home ==1)
    <article>
        <h2 class="text-center transform titreArticle">{{$articles->titre}}</h2>
        <div class="article row lato  ">
            
            <div class="text-center transform thumb">
                <img width="424" height="283" src="{{ asset('/img/horaire-des-cours.jpg') }}" class="attachment-post-thumbnail wp-post-image" alt="Horaire des cours">
            </div>
            <div>
                {!!html_entity_decode($articles->texte)!!}
            </div>
        </div>
    </article>
    @endif
    @endforeach
</section> 
@endif
@if ($rubriques->idRubriques == 2 )
            
<section id="section2" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
    <h1 class="text-center transform stroke titrePage">{{ $rubriques->titre }}</h1>
@foreach ($listeArticles as $articles)
        @if ($articles->RubriquesId == 2 )
            @if( $articles->photo == NULL)    
    <article>
        <h2 class="text-center transform titreArticle ">{!!html_entity_decode($articles->titre)!!}</h2>
        <div class="article row lato  ">
            <div>
                {!!html_entity_decode($articles->texte)!!}
            </div>
        </div>
    </article>
        @else
    <article>
        <h2 class="text-center transform titreArticle ">{!!html_entity_decode($articles->titre)!!}</h2>
        <div class="article row lato  ">
            <div class="text-center transform thumb">
                <img width="424" height="283" src="{{ asset('/img/'.$articles->photo) }}" class="attachment-post-thumbnail wp-post-image" alt="{{ $articles->titre }}">
            </div>
            <div>
                {!!html_entity_decode($articles->texte)!!}
            </div>
        </div>   
    </article>
        @endif
    @endif
@endforeach
</section>
@endif
@if ($rubriques->idRubriques == 3 )
            
<section id="section3" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
    <h1 class="text-center transform stroke titrePage">{{ $rubriques->titre }}</h1>
@foreach ($listeArticles as $articles)
    @if ($articles->RubriquesId == 3 )
        @if( $articles->photo == NULL) 
        <article>
            <h2 class="text-center transform titreArticle ">{!!html_entity_decode($articles->titre)!!}</h2>
            <div class="article row lato  ">
                <div>
                    {!!html_entity_decode($articles->texte)!!}
                </div>
            </div>
        </article>
        @else
        <article>
            <h2 class="text-center transform titreArticle ">{!!html_entity_decode($articles->titre)!!}</h2>
            <div class="article row lato  ">
                <div class="text-center transform thumb">
                    <img width="424" height="283" src="{{ asset('/img/'.$articles->photo) }}" class="attachment-post-thumbnail wp-post-image" alt="{{ $articles->titre }}">
                </div>
                <div>
                    {!!html_entity_decode($articles->texte)!!}
                </div>
            </div>
        </article>
        @endif
    @endif
@endforeach
</section>
@endif
@if ($rubriques->idRubriques == 4 )         
<section id="section4" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
    <h1 class="text-center transform stroke titrePage">{{ $rubriques->titre }}</h1>
@foreach ($listeArticles as $articles)
    @if ($articles->RubriquesId == 4 )
        @if( $articles->photo == NULL)
        <article>
            <h2 class="text-center transform titreArticle ">{{ $rubriques->titre }}</h2>
            <div class="article row lato  ">
                <div>
                    {!!html_entity_decode($articles->texte)!!}
                </div>
            </div>
        </article>
        @else
        @endif
    @endif
@endforeach
</section>
@endif
@if ($rubriques->idRubriques == 5 )
<section id="section5" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
    <h1 class="text-center transform stroke titrePage">{{ $rubriques->titre }}</h1>
<article>
@foreach ($listeArticles as $articles)
    @if ($articles->RubriquesId == 5 )
        @if( $articles->photo == NULL)
            {{--*/ $var = 0 /*--}}
            @if ($var == 0)
                <h2 class="text-center transform titreArticle">{{ $articles->titre }}</h2>
            <div class="article row lato  ">
                <div class="text-center transform thumb"></div>
                <div>
                    <div id="gallery-1" class="gallery galleryid-35 gallery-columns-3 gallery-size-thumbnail">
            {{--*/ $var = $var + 1 /*--}}            
            @endif
        @else
                    <dl class="gallery-item">
                        <dt class="gallery-icon landscape">
                            <a href="{{ asset('/img/'.$articles->photo) }}" data-slb-group="35" data-slb-active="1" data-slb-internal="0"><img width="150" height="150" src="{{ asset('/img/'.$articles->photo) }}" class="attachment-thumbnail" alt="{{ $articles->titre }}"></a>
                        </dt>
                    </dl>
        @endif
    @endif
@endforeach     
                    <br style="clear: both">
                </div>
            </div>
        </div>
    </article>
</section>
@endif
@if ($rubriques->idRubriques == 6 )                        
            
            
            
<section id="contact-page" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
    <h1 class="text-center transform stroke titrePage">{{ $rubriques->titre }}</h1>
@foreach ($listeArticles as $articles)
    @if ($articles->RubriquesId == 6 )
        <article>
            <h2 class="text-center transform titreArticle">{{ $articles->titre }}</h2>
    <div class="article row lato  ">
        <div class="text-center transform thumb"></div>
        <div>
            <div role="form" class="wpcf7" id="wpcf7-f44-o1" lang="fr-FR" dir="ltr">
            <div class="screen-reader-response"></div>
                <form name="" action="http://patrogem.be/cdrobermont-wp/#wpcf7-f44-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="44">
                        <input type="hidden" name="_wpcf7_version" value="4.1.2">
                        <input type="hidden" name="_wpcf7_locale" value="fr_FR">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f44-o1">
                        <input type="hidden" name="_wpnonce" value="3ddcca4aad">
                    </div>
                    <p>Votre nom (obligatoire)<br>
                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                        </span>
                    </p>
                    <p>Votre email (obligatoire)<br>
                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
                        </span> 
                    </p>
                    <p>Sujet<br>
                        <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
                        </span>
                    </p>
                    <p>Votre message<br>
                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                        </span>
                    </p>
                    <p>
                        <input type="hidden" name="_wpcf7_captcha_challenge_captcha-187" value="2677549888"><img class="wpcf7-form-control wpcf7-captchac wpcf7-captcha-captcha-187" width="72" height="24" alt="captcha" src="{{ asset ('/img/2677549888.png') }}">  -&gt; Vérification: Entrez ce texte ci-dessous<br>
                        <span class="wpcf7-form-control-wrap captcha-187"><input type="text" name="captcha-187" value="" size="40" class="wpcf7-form-control wpcf7-captchar" aria-invalid="false">
                        </span>
                    </p>
                    <p>
                        <input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit button"><img class="ajax-loader" src="{{ asset('/img/ajax-loader.gif') }}" alt="Envoi en cours ..." style="visibility: hidden;">
                    </p>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
        </div>
    </div>
    </article>
    <article>
        <h2 class="text-center transform titreArticle">Coordonnées</h2>
        <div class="article row lato  ">
            <div class="text-center transform thumb"></div>
            <div>
                <h1>
                    <span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Adresse</span>
                    <span lang="\&quot;\\&quot;FR\\&quot;\&quot;"><br>
                    </span>
                </h1>
                <div>
                    <span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Voie Mélotte S/N</span>
                </div>
                <div>&nbsp; <span lang="\&quot;\\&quot;FR\\&quot;\&quot;">4030 </span><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Grivegnée</span></div>
                <div>
                    <hr>
                </div>
                <h1><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Personnes de contact</span></h1>
                <div><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Roland Chantal 04 365 58 81 ou 0485 291 236</span></div>
                <div><span lang="\&quot;\\&quot;FR\\&quot;\&quot;">Deltour Nadine 04 365 27 89</span></div>
            </div>
        </div>
    </article>
</section>
    @endif
@endforeach
    
@endif
@endforeach
    </div>
@endsection
