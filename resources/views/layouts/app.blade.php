<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HerbyPulse')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
            color: #212529;
            padding-top: 70px;
        }

        /* NAVBAR */
        .navbar {
            background-color: #0b3d91;
        }

        .navbar-brand {
            font-weight: bold;
            color: #ffb347 !important;
        }

        .nav-link {
            color: #fff !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #ffb347 !important;
        }

        /* BOUTONS */
        .btn-primary {
            background-color: #ffb347;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ff9c00;
        }

        /* TITRES */
        h1, h2, h3, h4 {
            color: #0b3d91;
        }

        .highlight {
            color: #ffb347;
        }

        /* FOOTER */
        .footer {
            background-color: #0b3d91;
            color: #fff;
            padding: 30px 0;
            text-align: center;
            margin-top: 50px;
        }

        /* CV iframe */
        #cv-frame {
            transition: 0.3s;
        }

        #cv-frame:hover {
            transform: scale(1.01);
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">HerbyPulse</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Compétences</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cv') }}">CV</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projets</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENU -->
<div class="container py-4">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="footer">
    <h5 class="text-warning">HerbyPulse</h5>
    <p>Code. Crée. Impact.</p>

    <div>
        <a href="#" class="text-white me-3">Facebook</a>
        <a href="#" class="text-white me-3">LinkedIn</a>
        <a href="#" class="text-white">GitHub</a>
    </div>

    <p class="mt-3 mb-0">© {{ date('Y') }} Tous droits réservés</p>
</footer>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
AOS.init();
</script>

<script>
function toggleFullscreen() {
    let iframe = document.getElementById("cv-frame");

    if (!document.fullscreenElement) {
        iframe.requestFullscreen();
    } else {
        document.exitFullscreen();
    }
}
</script>

@yield('scripts')

</body>
</html>