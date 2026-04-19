@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- HERO CONTACT -->
<section class="contact-hero text-center text-white d-flex align-items-center justify-content-center mb-5">
    <div class="overlay"></div>

    <div class="content">
        <h1 class="fw-bold">Contactez-moi</h1>
        <p class="lead">Je réponds rapidement à tous vos messages ! </p>
    </div>
</section>

<!-- CONTACT SECTION -->
<div class="container mb-5">
    <div class="row g-4 justify-content-center">

        <!-- FORM -->
        <div class="col-md-7">
            <div class="card contact-card shadow-lg border-0 p-4">

                <h4 class="text-center mb-4 text-primary fw-bold">
                    Envoyez un message
                </h4>

                @if(session('success'))
                    <div class="alert alert-success text-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                <!-- 🔐 Honeypot anti-bot (caché) -->
                <input type="text" name="website" style="display:none">

                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" name="name" class="form-control modern-input" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control modern-input" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="5" class="form-control modern-input" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-modern w-100">
                         Envoyer le message
                    </button>
                </form>

            </div>
        </div>

        <!-- INFOS PANEL (SAAS STYLE) -->
        <div class="col-md-4">
            <div class="card info-card shadow-lg border-0 p-4 h-100">

                <h5 class="text-primary fw-bold mb-3">📌 Informations</h5>

                <p>📍 Port-au-Prince, Haïti</p>
                <p>📧 herbyshawlouis@gmail.com</p>
                <p>📱 WhatsApp: +509 4630-10-34</p>

                <hr>

                <h6 class="text-primary">⚡ Temps de réponse</h6>
                <p>Moins de 24h 🚀</p>

                <hr>

                <h6 class="text-primary">🔐 Admin Panel</h6>
                <a href="{{ url('/admin/messages') }}" class="btn btn-sm btn-outline-primary w-100">
                    Accéder Inbox SaaS
                </a>

            </div>
        </div>

    </div>
</div>

<!-- STYLE -->
<style>

/* HERO */
.contact-hero {
    position: relative;
    height: 40vh;
    background: url('{{ asset("images/dady10.png") }}') center/cover no-repeat;
}

.contact-hero .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
}

.contact-hero .content {
    position: relative;
    z-index: 2;
}

/* CARDS */
.contact-card, .info-card {
    border-radius: 18px;
    background: #fff;
    transition: 0.3s;
}

.contact-card:hover, .info-card:hover {
    transform: translateY(-5px);
}

/* INPUTS */
.modern-input {
    border-radius: 12px;
    border: 1px solid #ddd;
    padding: 12px;
    transition: 0.3s;
}

.modern-input:focus {
    border-color: #0b3d91;
    box-shadow: 0 0 10px rgba(11,61,145,0.2);
}

/* BUTTON */
.btn-modern {
    background: linear-gradient(135deg, #0b3d91, #ffb347);
    color: white;
    padding: 12px;
    border-radius: 12px;
    border: none;
    font-weight: bold;
    transition: 0.3s;
}

.btn-modern:hover {
    transform: scale(1.02);
    opacity: 0.9;
}

</style>

@endsection