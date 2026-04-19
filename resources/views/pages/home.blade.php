@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<!-- HERO STARTUP -->
<section class="hero-section d-flex align-items-center text-center">
    <div class="overlay"></div>

    <div class="container hero-content text-white">
        <h1 class="display-4 fw-bold mb-3">
            Bienvenue dans mon <span class="text-warning">univers digital</span>
        </h1>

        <p class="lead mb-3">
            L’énergie de la jeunesse au service de l’innovation technologique
        </p>

        <p class="mb-4">
            Je conçois des solutions web modernes, rapides et performantes pour transformer les idées en réalité.
        </p>

        <div>
            <a href="{{ route('projects') }}" class="btn btn-warning btn-lg me-2 shadow">
                Voir mes projets
            </a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                Me contacter
            </a>
        </div>
    </div>
</section>

<!-- SLIDER -->
<section class="container section-spacing">
    <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner rounded-4 shadow-lg overflow-hidden">

            <div class="carousel-item active">
                <img src="{{ asset('images/dady10.png') }}" class="d-block w-100" alt="">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/dady3.png') }}" class="d-block w-100" alt="">
            </div>

           

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-warning rounded-circle p-3"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#portfolioCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-warning rounded-circle p-3"></span>
        </button>

    </div>
</section>

<!-- SOLUTIONS -->
<section class="section-spacing text-center">
    <div class="container">

        <h2 class="section-title">Nos Solutions</h2>

        <div class="row g-4 mt-3">

            <div class="col-md-4">
                <div class="card-modern">
                    <h5>Développement Web</h5>
                    <p>Sites modernes, rapides et sécurisés adaptés aux besoins actuels.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-modern">
                    <h5>API & Backend</h5>
                    <p>Conception d’API robustes et systèmes backend performants.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-modern">
                    <h5>Réseaux & Serveurs</h5>
                    <p>Installation, configuration et sécurité des infrastructures réseau.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- EDUCATION -->
<section class="section-spacing bg-light text-center">
    <div class="container">

        <h2 class="section-title">Éducation Technologique</h2>

        <p class="mt-3 mb-4">
            Je partage des connaissances en programmation, réseaux, bases de données et développement moderne pour aider les jeunes à progresser.
        </p>

        <a href="#" class="btn btn-warning btn-lg shadow">
            Commencer à apprendre
        </a>

    </div>
</section>

<!-- STYLE STARTUP -->
<style>

/* spacing global type startup */
.section-spacing {
    padding: 90px 0;
}

/* HERO */
.hero-section {
    position: relative;
    height: 100vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65);
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* TITRES */
.section-title {
    font-size: 32px;
    font-weight: bold;
    color: #0b3d91;
}

/* CARDS STARTUP STYLE */
.card-modern {
    background: #fff;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: 0.3s;
    height: 100%;
}

.card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

/* CAROUSEL */
.carousel-item img {
    height: 500px;
    object-fit: cover;
    border-radius: 15px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .hero-section {
        height: 85vh;
    }

    .section-spacing {
        padding: 60px 0;
    }

    .carousel-item img {
        height: 300px;
    }
}

</style>

@endsection