@extends('layouts.app')

@section('title', $project->title)

@section('content')

<section class="project-hero text-center text-white d-flex align-items-center justify-content-center mb-5">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="fw-bold">{{ $project->title }}</h1>
        <p class="lead">Détail du projet 🚀</p>
    </div>
</section>

<div class="container py-4">

    <div class="project-card p-4">

        <p class="text-muted fs-5">
            {{ $project->description }}
        </p>

        <span class="badge bg-primary mb-3">
            {{ $project->tech }}
        </span>

        <div class="mt-3">

            <a href="{{ route('projects') }}" class="btn btn-outline-dark">
                ← Retour
            </a>

        </div>

    </div>

</div>

<style>

.project-hero {
    position: relative;
    height: 35vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.project-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65);
}

.project-hero .content {
    position: relative;
    z-index: 2;
}

.project-card {
    background: white;
    border-radius: 18px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

</style>

@endsection