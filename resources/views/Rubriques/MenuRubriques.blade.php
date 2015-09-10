@section('menu')
    <ul class="clearfix text-center " id="menu">
        {{--*/ $var = 2 /*--}}
        {{--*/ $pourcent = 1 /*--}}
        @foreach ($listeRubriques as $rubrique)
            @if ($rubrique->id!=1 && $rubrique->id!=6)
            <li><a href="#{{$rubrique->slug}}" id="nav{{$var}}" class="bg-{{ $rubrique->slug}} columns large-3" data-right="{{$pourcent}}00%" data-page="#section2">{{ $rubrique->titre}}</a></li>
            {{--*/ $var = $var + 1 /*--}}
            {{--*/ $pourcent = $pourcent + 1 /*--}}
            @else
                @if($rubrique->id==6)
                <li class="show-for-medium-down"><a href="#{{ $rubrique->slug}}" id="lien-{{ $rubrique->slug}}2" data-page="#{{ $rubrique->slug}}-page">{{ $rubrique->titre}}</a></li>
                @endif
            @endif
        @endforeach
    </ul>
@endsection