<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">

        <link rel="apple-touch-icon" sizes="180x180" href="liaisons/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="liaisons/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="liaisons/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="liaisons/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="liaisons/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="liaisons/css/styles.css">
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



