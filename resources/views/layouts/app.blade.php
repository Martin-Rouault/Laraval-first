<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <h1>Mon site Laravel</h1>
    </header>
    <main>
        <h2>@yield('content-title')</h2>
        @yield('content')
    </main>
    <footer>
        <p>© 2025 - Tous droits réservés</p>
    </footer>
</body>

</html>