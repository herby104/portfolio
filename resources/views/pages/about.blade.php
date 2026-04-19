@extends('layouts.app')

@section('title', 'À propos')

@section('content')

<!-- HERO SAAS -->
<section class="about-hero text-center text-white d-flex align-items-center justify-content-center mb-5">
    <div class="overlay"></div>

    <div class="content">
        <h1 class="fw-bold">À propos de moi</h1>
        <p class="lead">Développeur Full Stack • SaaS • API • UI/UX 🚀</p>
    </div>
</section>

<div class="container py-4">

    <!-- DASHBOARD QUICK STATS (preview futur admin panel) -->
    <div class="row mb-4 text-center">

        <div class="col-md-3 mb-3" data-aos="fade-up">
            <div class="stat-card">
                <h3>15+</h3>
                <p>Projets</p>
            </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up">
            <div class="stat-card">
                <h3>API</h3>
                <p>REST Backend</p>
            </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up">
            <div class="stat-card">
                <h3>UX</h3>
                <p>UI Moderne</p>
            </div>
        </div>

        <div class="col-md-3 mb-3" data-aos="fade-up">
            <div class="stat-card">
                <h3>Full</h3>
                <p>Stack Dev</p>
            </div>
        </div>

    </div>

    <div class="row g-4">

        <!-- LEFT -->
        <div class="col-md-8" data-aos="fade-right">

            <div class="glass-card p-4 h-100">

                <h4 class="mb-3">👨‍💻 Profil professionnel</h4>

                <p>
                    Je suis étudiant en fin de cycle en Sciences Informatiques à l’Université INUKA,
                    spécialisé dans le développement web moderne et les bases de données.
                </p>

                <p>
                    Je développe des applications web avec Laravel, PHP, JavaScript, MySQL et API REST.
                    Mon objectif est de construire des systèmes complets : frontend + backend + API + dashboard admin.
                </p>

                <p>
                    J’ai également travaillé sur des projets de gestion, des systèmes web dynamiques et
                    des intégrations backend professionnelles.
                </p>

                <!-- TECH BADGES -->
                <div class="mt-3">
                    <span class="badge bg-primary m-1">Laravel</span>
                    <span class="badge bg-dark m-1">PHP</span>
                    <span class="badge bg-warning text-dark m-1">JavaScript</span>
                    <span class="badge bg-success m-1">MySQL</span>
                    <span class="badge bg-info text-dark m-1">API REST</span>
                    <span class="badge bg-secondary m-1">Dashboard</span>
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="col-md-4" data-aos="fade-left">

            <div class="glass-card p-3 mb-3">
                <h5>🔐 Admin Panel</h5>
                <p>Inbox messages + gestion SaaS</p>
            </div>

            <div class="glass-card p-3 mb-3">
                <h5>📩 Inbox</h5>
                <p>Messages clients type Gmail</p>
            </div>

            <div class="glass-card p-3 mb-3">
                <h5>📊 Statistiques</h5>
                <p>Visiteurs + analytics dashboard</p>
            </div>

            <div class="glass-card p-3">
                <h5>🌙 Dark Mode</h5>
                <p>UI moderne adaptable</p>
            </div>

        </div>

    </div>

</div>

<!-- STYLE -->
<style>

/* HERO */
.about-hero {
    position: relative;
    height: 40vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.about-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.65);
}

.about-hero .content {
    position: relative;
    z-index: 2;
}

/* GLASS CARD */
.glass-card {
    background: rgba(255,255,255,0.92);
    border-radius: 18px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.glass-card:hover {
    transform: translateY(-6px);
}

/* STATS */
.stat-card {
    background: white;
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.stat-card:hover {
    transform: translateY(-5px);
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    color: white;
}

/* RESPONSIVE */
@media(max-width:768px){
    .about-hero {
        height: 30vh;
    }
}

</style>

@endsection