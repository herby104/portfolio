@extends('layouts.app')

@section('title', 'Projets')

@section('content')

<!-- HERO -->
<section class="projects-hero text-center text-white d-flex align-items-center justify-content-center mb-5">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="fw-bold">Mes Projets</h1>
        <p class="lead">Applications web, API & solutions digitales 🚀</p>
    </div>
</section>

<div class="container py-4">

    <div class="row g-4">

        @foreach($projects as $project)

        <div class="col-md-4">

            <div class="project-card">

                <!-- IMAGE -->
                <div class="project-img-placeholder">
                    {{ $project->title }}
                </div>

                <div class="p-3">

                    <h5 class="fw-bold">{{ $project->title }}</h5>

                    <p class="text-muted">
                        {{ $project->description }}
                    </p>

                    <!-- TECH -->
                    <span class="badge bg-primary mb-2">
                        {{ $project->tech }}
                    </span>

                    <!-- BUTTON -->
                    <a href="{{ route('projects.show', $project->id) }}"
                       class="btn btn-modern w-100 mt-2">
                        Voir le projet
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

<style>

.projects-hero {
    position: relative;
    height: 40vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.projects-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65);
}

.projects-hero .content {
    position: relative;
    z-index: 2;
}

.project-card {
    background: white;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.project-card:hover {
    transform: translateY(-8px);
}

.project-img-placeholder {
    height: 180px;
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
}

.btn-modern {
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    color: white;
    border-radius: 10px;
    font-weight: bold;
    border: none;
}

.btn-modern:hover {
    transform: scale(1.03);
    color: white;
}

</style>

@endsection