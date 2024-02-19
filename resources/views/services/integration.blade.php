@extends('layouts')

@section('title')
    Integration de solutions
@endsection

@section('content')
    <div class="container-fluid py-5" style="background-color: #1a75bb; color:white;">
        <div>
            <br>
            <h2 class="text-center">Intégrations de solutions</h2>
            <nav class="d-flex justify-content-center" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" style="color: white;">Accueil</a></li>
                    <li class="breadcrumb-item">Services</li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: white;">Intégration de solutions
                    </li>
                </ol>
            </nav>
            <br>
        </div>
    </div>
    <section id="" class="faq section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row py-3 d-flex align-items-stretch">
                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                    {{-- <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4> --}}
                    <h2 class="pt-4">Intégration de SAP Business One </h2>

                    <p class="text-justify">
                        Découvrez SAP Business One, la solution de gestion d'entreprise conçue pour propulser votre
                        entreprise vers de nouveaux sommets. Avec son intégration complète des processus commerciaux, sa
                        personnalisation flexible et ses capacités avancées d'analyse, SAP Business One simplifie la gestion
                        quotidienne tout en offrant une visibilité accrue et une prise de décision éclairée. Ne laissez pas
                        les défis opérationnels freiner votre croissance ; explorez dès aujourd'hui comment SAP Business One
                        peut dynamiser votre entreprise et la mener vers le succès.
                    </p>
                    <a href="{{ route('sap') }}" class="btn btn-primary py-3">Découvrez la solution</a>
                </div>

                <div class="col-lg-6 faq-item" data-aos="fade-up">
                    <img src="{{ asset('assets/img/sap-1.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row py-3 d-flex align-items-stretch">

                <div class="col-lg-6 faq-item d-flex align-items-center" data-aos="fade-up">
                    <img src="{{ asset('assets/img/rsm.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="pt-4">Intégration SAP RSM </h2>
                    <p class="text-justify">
                        Découvrez SAP RSM, la solution de gestion agricole innovante qui révolutionne la façon dont les
                        exploitants agricoles gèrent leurs opérations. Avec SAP RSM, vous bénéficiez d'une suite complète
                        d'outils conçus pour simplifier la gestion des cultures, améliorer la traçabilité des produits,
                        optimiser la planification des cultures et maximiser la productivité. Que vous soyez un petit
                        agriculteur ou une grande exploitation agricole, SAP RSM vous offre la possibilité de prendre des
                        décisions éclairées basées sur des données en temps réel, de garantir la durabilité de vos pratiques
                        agricoles et de répondre aux exigences croissantes en matière de traçabilité alimentaire.
                    </p>
                    <a href="{{ route('rsm') }}" class="btn btn-primary py-3">Découvrez la solution</a>
                </div>
            </div>

        </div>
    </section>
@endsection
