@extends('layouts')

@section('title')
    SAP Business One
@endsection

@section('content')
    <section id="about-sap" class="about-sap" style="background-color: #f5f5f5;">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="title">
                        <h2 class="text-capitalize fw-bold">Qu'est-ce que SAP RSM ?</h2>
                    </div>
                    <p class="text-justify">
                        SAP RSM (Rural Sourcing Management), Gestion de l'approvisionnement rural en français est une
                        application commerciale mobile reliant les petits exploitants agricoles et les fournisseurs des
                        zones rurales à la chaîne d'approvisionnement des entreprises agroalimentaires mondiales et des
                        entreprises de produits de consommation.
                    </p>
                </div>

                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assets/img/rsm-2.png') }}" class="img-fluid rounded" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about-sap">
        <div class="container" data-aos="fade-up">
            <div class="title text-center">
                <h2 class="fw-bold text-uppercase">Pourquoi choisir SAP RSM ?</h2>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"><a href="">Surveillez, suivez et tracez votre chaîne
                                d'approvisionnement</a></h4>
                        <p class="description text-justify">
                            Reliez les processus agricoles et logistiques pour former une chaîne de visibilité afin de
                            garantir une traçabilité complète et de surveiller les améliorations de la production de la
                            ferme à l'assiette.
                        </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"><a href="">Analysez les données à tout moment et en tout lieu</a></h4>
                        <p class="description text-justify">Accédez et analysez rapidement un grand volume de données en
                            temps réel pour examiner et vérifier chaque source d’origine agricole de vos produits. </p>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-check"></i></div>
                        <h4 class="title"><a href="">Se conformer aux réglementations actuelles et futures</a></h4>
                        <p class="description text-justify">Gérez vos collaborateurs, vos processus, vos données et vos
                            actifs pour garantir que toutes les réglementations agricoles actuelles et futures sont
                            respectées avec précision.</p>
                    </div>

                </div>
                <div class="col-lg-6 video-box d-flex align-items-center" data-aos="right-up" data-aos-delay="100">
                    <img src="{{ asset('assets/img/sap-rural.png') }}" class="img-fluid" alt="">
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
    <section id="about-sap" class="about-sap" style="background-color: #f5f5f5;">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assets/img/rsm-phone.png') }}" class="img-fluid rounded" alt="">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <p class="text-justify">
                        Connectez les petits exploitants agricoles à votre chaîne d’approvisionnement agricole et obtenez
                        une transparence totale sur la source de vos matières premières. Avec la solution SAP Rural Sourcing
                        Management, vous pouvez mieux gérer vos données de durabilité grâce à des informations enregistrées
                        numériquement sur les producteurs, leurs exploitations agricoles et leurs communautés à chaque
                        niveau de la chaîne de valeur.
                    </p>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-right-arrow"></i></div>
                        <h4 class="title"><a href="">Capacités de suivi et de traçabilité, de la ferme à la
                                table</a></h4>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-right-arrow"></i></div>
                        <h4 class="title"><a href="">Analyse de l'approvisionnement en matières premières
                                agricoles</a></h4>
                    </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-right-arrow"></i></div>
                        <h4 class="title"><a href="">Respect de la réglementation agricole</a></h4>
                    </div>
                    <div class="mt-4">
                        <a href="" class="btn btn-primary">Demandez une démo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
