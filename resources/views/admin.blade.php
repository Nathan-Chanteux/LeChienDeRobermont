<!DOCTYPE html>
<html>
    <head>
        <title>Le chien de Robermont - Back Office</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('/foundation/css/foundation.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/styleForme.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/styleBk.css') }}">
        
        <script src="{{ asset('/foundation/js/vendor/modernizr.js') }}"></script>
    </head>
    <body>
        <nav class="bk-bar large-12 columns">
            <ul>
                <li class="large-11 columns"><h1>BackOffice - Le Chien De Robermont</h1></li>
                <li class="large-1 columns bk-deconnexion">
                    <a href="{{ URL::asset('/auth/logout') }}"><img src="{{ asset('/img/logout.png') }}" alt="Déconnexion" /></a>
                </li>
            </ul>
        </nav>
        <header class="large-3 columns padding-left-none padding-right-none">
            <nav class="bk-menu">
                <ul>
                    <li><a href="">GESTION DES ARTICLES</a>
                        <ul class='bk-sous-menu'>
                            <li><a href="{{ URL::asset('/admin/article/ajout') }}">Ajouter d'un article</a></li>
                            <li><a href="{{ URL::asset('/admin/article') }}">Modifier/Supprimer d'un article</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class='large-9 columns bk-info-titre'>@yield('info')</div>
        <main class="large-9 columns">
            @yield('contenu')
        </main>
        <script src="{{ asset('/foundation/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/foundation/js/foundation.min.js') }}"></script>
        <script>
          $(document).foundation();
        </script>
    </body>
</html>
