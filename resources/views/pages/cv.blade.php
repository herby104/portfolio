@extends('layouts.app')

@section('title', 'CV')

@section('content')

<!-- HERO -->
<section class="cv-hero text-center text-white d-flex align-items-center justify-content-center mb-5">
    <div class="overlay"></div>

    <div class="content">
        <h1 class="fw-bold">Mon CV Professionnel</h1>
        <p class="lead">Téléchargement & aperçu en ligne 📄</p>
    </div>
</section>

<div class="container py-4">

    <!-- ACTIONS -->
    <div class="text-center mb-4" data-aos="zoom-in">

        <a href="{{ route('cv.download') }}" class="btn btn-modern px-4 py-2">
            📥 Télécharger le CV
        </a>

    </div>

    <!-- CV PREVIEW -->
    <div class="cv-card shadow-lg" data-aos="fade-up">

        <div class="cv-header">
            <h5 class="mb-0">Aperçu du CV</h5>
        </div>

        <div class="cv-body">

            <iframe 
                src="{{ asset('herby.pdf') }}" 
                class="cv-frame">
            </iframe>

        </div>

    </div>

</div>

<!-- STYLE -->
<style>

/* HERO */
.cv-hero {
    position: relative;
    height: 35vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.cv-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65);
}

.cv-hero .content {
    position: relative;
    z-index: 2;
}

/* BUTTON MODERN */
.btn-modern {
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    color: white;
    border-radius: 12px;
    font-weight: bold;
    transition: 0.3s;
    border: none;
}

.btn-modern:hover {
    transform: scale(1.05);
    color: white;
}

/* CV CARD */
.cv-card {
    border-radius: 18px;
    overflow: hidden;
    background: white;
}

.cv-header {
    background: #0b3d91;
    color: white;
    padding: 15px;
}

.cv-body {
    padding: 0;
}

.cv-frame {
    width: 100%;
    height: 700px;
    border: none;
}

/* RESPONSIVE */
@media(max-width:768px){
    .cv-hero {
        height: 30vh;
    }

    .cv-frame {
        height: 500px;
    }
}

</style>

@endsection