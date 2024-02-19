@extends('layouts')

@section('title')
    Développement web
@endsection

@section('content')
<div class="container-fluid py-5" style="background-color: #1a75bb; color:white;">
    <div>
        <br>
        <h2 class="text-center">Développement web</h2>
        <nav class="d-flex justify-content-center" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" style="color: white;">Accueil</a></li>
                <li class="breadcrumb-item">Services</li>
                <li class="breadcrumb-item active" aria-current="page" style="color: white;">Développement web
                </li>
            </ol>
        </nav>
        <br>
    </div>
</div>
<div class="row py-5 container-fluid">
    <div class="col-md-6">
        <h2 class="fw-bold">Développement web</h2>
        <p class="text-justify">
            Découvrez notre service de développement web sur mesure, conçu pour transformer vos idées en solutions
            numériques percutantes. Que vous cherchiez à créer un site web élégant, une application web interactive ou
            une plateforme e-commerce robuste, notre équipe d'experts en développement web est là pour répondre à vos
            besoins.
        </p>
        <p class="text-justify">
            Grâce à notre approche personnalisée, nous travaillons en étroite collaboration avec vous à chaque étape du
            processus, de la conception initiale au déploiement final, pour nous assurer que votre vision devienne une
            réalité numérique.
        </p>
        <p class="text-justify">
            Avec notre expertise technique, notre engagement envers la qualité et notre souci du détail, nous sommes
            prêts à relever tous les défis et à vous fournir des solutions web exceptionnelles qui dépassent vos
            attentes. Confiez-nous votre prochain projet de développement web et laissez-nous vous aider à concrétiser
            votre vision en ligne.
        </p>
        <a href="{{route('contact')}}" class="btn btn-primary shadow p-3 mb-5 bg-body-primary rounded">Demander un devis</a>
    </div>
    <div class="col-md-6 ">
        <img src="{{asset('assets/img/dev.jpg')}}" class="img-fluid rounded" alt="developpement-web">
    </div>
</div>
@endsection