@extends('layouts')

@section('title')
    Accompagnement digital
@endsection

@section('content')
    <div class="container-fluid py-5" style="background-color: #1a75bb; color:white;">
        <div>
            <br>
            <h2 class="text-center">Accompagnement digital</h2>
            <nav class="d-flex justify-content-center" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="color: white;">Accueil</a></li>
                    <li class="breadcrumb-item">Services</li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: white;">Accompagnement digital
                    </li>
                </ol>
            </nav>
            <br>
        </div>
    </div>
    <div class="row container-fluid py-5">
        <div class="col-md-6">
            <h2 class="fw-bold">Accompagnement digital</h2>
            <p class="text-justify">
                Que vous soyez une entreprise établie cherchant à renforcer sa présence en ligne ou une start-up ambitieuse
                cherchant à développer sa stratégie numérique, notre équipe d'experts en accompagnement digital est là pour
                vous guider à chaque étape du parcours.
            </p>
            <p class="text-justify">
                De la définition de votre stratégie digitale à la mise en œuvre de campagnes de marketing numérique
                efficaces, nous travaillons en étroite collaboration avec vous pour identifier les opportunités, surmonter
                les défis et atteindre vos objectifs commerciaux.
            </p>
            <p class="text-justify">
                Avec notre approche axée sur les résultats, notre expertise multidisciplinaire et notre engagement envers
                votre succès, nous sommes prêts à être votre partenaire de confiance dans votre transformation digitale.
                Confiez-nous votre vision et laissez-nous vous accompagner dans votre voyage vers le succès numérique.
            </p>
            <a href="{{route('contact')}}" class="btn btn-primary py-2">Demander un devis</a>
        </div>
        <div class="col-md-6 ">
            <img src="{{asset('assets/img/social-media.png')}}" class="img-fluid rounded" alt="developpement-web">
        </div>
    </div>
@endsection
