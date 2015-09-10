@extends('app')

@section('contenu')
<section id="contact-page" class="page-systeme page-contenu" style="width: 1516px; min-height: 796px;">
    <article>
            <h2 class="text-center transform titreArticle">Login</h2>
    <div class="article row lato  ">
        <div class="text-center transform thumb"></div>
        <div>
            <div role="form" class="wpcf7" id="wpcf7-f44-o1" lang="fr-FR" dir="ltr">
            <div class="screen-reader-response"></div>
                @if (count($errors) > 0)
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
                @endif
                <form role="form" method="POST" action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div><p>E-Mail Address</p>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"></div>

                    <div><p>Password</p>
                        <input type="password" class="form-control" name="password"></div>
                    <div><label></label>
                        <input type="checkbox" name="remember"> Remember Me</div>

                    <button type="submit">Login</button>
                </form>
                <p><a href="{{ URL::asset('/') }}">Page d'accueil</a></p>
                </div>
            </div>
        </div>
        </article>
    </div>
</section>
@endsection
        