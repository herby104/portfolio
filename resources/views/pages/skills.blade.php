@extends('layouts.app')

@section('title', 'Compétences')

@section('content')

<!-- HERO -->
<section class="skills-hero text-center text-white d-flex align-items-center justify-content-center mb-5">
    <div class="overlay"></div>
    <div class="content">
        <h1 class="fw-bold">Mes Compétences</h1>
        <p class="lead">Niveau professionnel & technologies maîtrisées 🚀</p>
    </div>
</section>

<div class="container mb-5">

    <!-- TECH SKILLS -->
    <h3 class="section-title mb-4">💻 Compétences Techniques</h3>

    @php
    $skills = [
        ["name" => "Laravel", "level" => 70],
        ["name" => "PHP", "level" => 80],
        ["name" => "JavaScript", "level" => 60],
        ["name" => "MySQL / Oracle", "level" => 85],
        ["name" => "API REST", "level" => 70],
        ["name" => "Java OOP", "level" => 65],
        ["name" => "Réseaux & Serveurs", "level" => 70],
    ];
    @endphp

    <div class="row">

        @foreach($skills as $skill)
        <div class="col-md-6 mb-4" data-aos="fade-up">

            <div class="skill-box">

                <div class="d-flex justify-content-between">
                    <span class="fw-bold">{{ $skill['name'] }}</span>
                    <span>{{ $skill['level'] }}%</span>
                </div>

                <div class="progress mt-2">
                    <div class="progress-bar" style="width: {{ $skill['level'] }}%"></div>
                </div>

            </div>

        </div>
        @endforeach

    </div>

    <!-- BADGES -->
    <h3 class="section-title mt-5 mb-3">🏷️ Technologies</h3>

    <div class="mb-5" data-aos="fade-up">

        <span class="badge bg-primary m-1">Laravel</span>
        <span class="badge bg-dark m-1">PHP</span>
        <span class="badge bg-warning text-dark m-1">JavaScript</span>
        <span class="badge bg-success m-1">MySQL</span>
        <span class="badge bg-info text-dark m-1">API REST</span>
        <span class="badge bg-danger m-1">Java</span>
        <span class="badge bg-secondary m-1">Linux</span>
        <span class="badge bg-primary m-1">Networking</span>

    </div>

    <!-- CERTIFICATIONS -->
    <h3 class="section-title mb-3">🎓 Certifications</h3>

    <div class="row">

        <div class="col-md-4" data-aos="zoom-in">
            <div class="cert-card">
                <h5>Développement Web</h5>
                <p>PHP / Laravel / JS</p>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in">
            <div class="cert-card">
                <h5>Réseaux Informatiques</h5>
                <p>Routing / DHCP / DNS</p>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in">
            <div class="cert-card">
                <h5>API & Backend</h5>
                <p>REST / JSON / Postman</p>
            </div>
        </div>

    </div>

</div>

<!-- STYLE -->
<style>

/* HERO */
.skills-hero {
    position: relative;
    height: 40vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.skills-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}

.skills-hero .content {
    position: relative;
    z-index: 2;
}

/* TITLE */
.section-title {
    color: #0b3d91;
    font-weight: bold;
}

/* SKILL BOX */
.skill-box {
    background: #fff;
    padding: 15px;
    border-radius: 14px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.skill-box:hover {
    transform: translateY(-5px);
}

/* PROGRESS BAR */
.progress {
    height: 10px;
    border-radius: 20px;
    background: #e9ecef;
}

.progress-bar {
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    border-radius: 20px;
}

/* CERT CARDS */
.cert-card {
    background: white;
    padding: 20px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.cert-card:hover {
    transform: translateY(-6px);
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    color: white;
}

</style>

@endsection