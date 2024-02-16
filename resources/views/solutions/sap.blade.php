@extends('layouts')

@section('title')
    SAP Business One
@endsection

@section('content')
    <section id="about-sap" class="about-sap" style="background-color: #f5f5f5;">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assets/img/sap-1.jpg') }}" class="img-fluid rounded" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="title">
                        <h2 class="text-capitalize fw-bold">Qu'est-ce que SAP Business ?</h2>
                    </div>
                    <p class="text-justify">
                        SAP Business One est une solution de gestion complète qui répond aux besoins en constante évolution
                        des petites et moyennes entreprises en croissance. Grâce à son implantation facile, à son interface
                        conviviale et à sa grande puissance, elle aide les entreprises à mieux gérer chacun des aspects de
                        leurs opérations quotidiennes.
                    </p>
                    <p class="text-justify">
                        De la comptabilité à la budgétisation, en passant par les achats et la gestion des stocks, jusqu’aux
                        ventes, la gestion de la relation client et la gestion de projet… tout est réuni en un seul et même
                        endroit ! Avec SAP Business One, vous avez la certitude que vos processus de gestion resteront
                        efficaces, protégés et rentables !
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about-sap">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="title">
                        <h2 class="fw-bold text-capitalize">Pourquoi choisir SAP ?</h2>
                        <p class="text-justify">SAP Business One est la solution idéale pour les petites et moyennes entreprises cherchant à
                            optimiser leurs opérations. Voici les raisons pour lesquelles vous devez l'utiliser pour votre
                            gestion</p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"><a href="">Intégration complète des processus commerciaux</a></h4>
                        <p class="description text-justify">
                            SAP Business One offre une intégration complète des processus commerciaux essentiels, tels que
                            la gestion des ventes, des achats, de l'inventaire, de la comptabilité et des relations avec les
                            clients.
                        </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"><a href="">Personnalisation et extensibilité</a></h4>
                        <p class="description text-justify">SAP Business One est hautement personnalisable et extensible pour répondre
                            aux besoins spécifiques de chaque entreprise. </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"><a href="">Analyse et reporting avancés</a></h4>
                        <p class="description text-justify">SAP Business One offre des capacités avancées d'analyse et de reporting, ce
                            qui permet aux entreprises de prendre des décisions plus éclairées basées sur des données en
                            temps réel.</p>
                    </div>

                </div>
                <div class="col-lg-6 video-box d-flex align-items-center">
                    <img src="{{ asset('assets/img/sap-business-one.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="about-sap" class="about-sap" style="background-color: #3b76ba;">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <h3 class="text-uppercase" style="color:white;">Propulsez votre entreprise avec SAP Business One !</h3>
                </div>

                <div class="col-lg-6">
                    <p class="text-justify" style="color:white;">
                        Découvrez la puissance de SAP Business One, la solution intégrée qui simplifie chaque aspect de vos
                        opérations commerciales. Avec des outils d'analyse avancés et une personnalisation flexible,
                        libérez-vous des tâches administratives et concentrez-vous sur l'innovation. Demandez une démo dès
                        aujourd'hui et propulsez votre entreprise vers de nouveaux sommets.
                    </p>
                    <a href="/demande-demo" class="btn btn-primary">Demandez une démo</a>
                </div>
            </div>
        </div>
    </section>
@endsection
