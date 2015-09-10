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
        <header></header>
        @yield('contenu')
        
        <script src="{{ asset('/foundation/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/foundation/js/foundation.min.js') }}"></script>
        <script>
          $(document).foundation();
        </script>
    </body>
</html>
