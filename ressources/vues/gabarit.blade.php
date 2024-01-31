<!DOCTTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
    </head>
    <body>
        <header >
            @include('fragments.entete')
        </header>

        <main>
            @yield('contenu')
        </main>

        <footer>
            @include('fragments.pieddepage', ['date'=> (new \DateTime())->format('Y'), 'legal'=> '© Tous droits réservés'])
        </footer>
    </body>
</html>




