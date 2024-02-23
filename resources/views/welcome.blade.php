@extends('layouts')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background-image: url('assets/img/slide/slide-1.png'); width:100%;">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">SAP Business One</h2>
                                <p class="animate__animated animate__fadeInUp text-justify">La société de services spécialisée dans
                                    l’accompagnement des entreprises dans leur transformation digitale.</p>
                                <a href="{{ url('/a-propos') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">En savoir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.png');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Intégration SAP RSM</h2>
                                <p class="animate__animated animate__fadeInUp text-justify">Notre solution offre une suite d'outils
                                    intégrés pour
                                    simplifier et optimiser la gestion des cultures, la traçabilité des produits, la
                                    planification des cultures et la gestion des stocks. Cette solution contribue à
                                    améliorer la productivité, la durabilité et la rentabilité des exploitations agricoles
                                    en modernisant leurs pratiques de gestion.</p>
                                <a href="{{ route('rsm') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">
                                    En savoir plus</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/slide-5.png');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Développement mobile</h2>
                                <p class="animate__animated animate__fadeInUp text-justify">
                                    Nous donnons vie à votre vision en créant une application web ou mobile, propulsant
                                    ainsi votre entreprise dans l'arène concurrentielle. Avec notre expertise, transformons
                                    votre idée en une réalité numérique innovante. Montez d'un cran dans le monde digital
                                    avec nous.</p>
                                <a href="{{ route('developpement') }}"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/img1.jpg" class="img-fluid" alt="">
                        {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> --}}
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <h2>A propos</h2>
                            <p>
                                Créée en 2016 par Monsieur LOUIS DIAKITE (Président du Groupe ALINK) dans le but de
                                proposer, d’assister
                                et d’intégrer des solutions applicatives adaptées aux besoins réels des clients, Croissance
                                Numerique est une
                                société de services spécialisée dans l’accompagnement des entreprises dans leur
                                transformation digitale. Nous aidons les petites et moyennes entreprises
                                à simplifier leurs processus opérationnels clés pour maximiser leur efficacité et leur
                                rentabilité.
                            </p>

                            <a href="{{ route('a-propos') }}" class="btn btn mt-3" style="background-color: #ffdd15;">En savoir plus</a>
                        </div>

                        {{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div> --}}

                        {{-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div> --}}


                        {{-- <button type="button" class="btn btn-primary">En savoir plus</button> --}}


                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->




        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-cpu"></i></div>
                        <h4 class="title"><a href="{{ route('integration') }}">Integration de solution</a></h4>
                        <p class="description">
                            L'intégration de solutions désigne le processus de connexion et d'interaction entre différentes
                            technologies, logiciels
                            ou systèmes au sein d'une organisation qui l'une de nos expertises. {{-- L'objectif est d'assurer une collaboration harmonieuse entre
                             ces éléments pour améliorer l'efficacité opérationnelle, optimiser les processus et favoriser une meilleure prise de décision.  --}}
                        </p>
                        {{-- <button type="button" class="btn" style="background: #ffdd15">En savoir plus</button> --}}
                        <a href="{{ route('integration') }}" class="btn btn" style="background-color: #ffdd15;">En savoir plus</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-cloud-minus-fill"></i></div>
                        <h4 class="title"><a href="{{ route('accompagnement') }}">Accompagnement Digital</a></h4>
                        <p class="description">Nous vous accompagnons à travers la transition vers des solutions numériques
                            afin d'améliorer vos processus, vos services ou votre présence en ligne.</p> <br>
                        {{-- <button type="button" class="btn" style="background: #ffdd15">En savoir plus</button> --}}
                        <a href="{{ route('accompagnement') }}" class="btn btn" style="background-color: #ffdd15;">En savoir plus</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-globe"></i></div>
                        <h4 class="title"><a href="{{ route('developpement') }}">Développement d'appliation</a></h4>
                        <p class="description">Nous mettons notre expertise à votre service pour vous guider tout au long du
                            développement d'applications,
                            afin d'optimiser vos processus...


                            <br> <br>
                        </p>
                        {{-- <button type="button" class="btn" style="background: #ffdd15">En savoir plus</button> --}}
                        <a href="{{ route('developpement') }}" class="btn" style="background-color: #ffdd15;">En savoir plus</a>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->
        <!-- ======= Presentation Solution ======= -->

        <section id="solutions" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="row py-3 d-flex align-items-stretch">
                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                        {{-- <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4> --}}
                        <h2 class="pt-4">Qu'est-ce que SAP Business One ? </h2>

                        <p class="text-justify">
                            Est un logiciel qui offre une suite complète d'outils de gestion intégrés pour aider les entreprises à gérer
                            efficacement leurs opérations commerciales, y compris la gestion des ventes, des achats, des
                            stocks, de la comptabilité, des ressources humaines et plus encore. SAP Business One permet aux
                            entreprises de rationaliser leurs processus métier, d'améliorer leur visibilité sur les
                            opérations et de prendre des décisions stratégiques basées sur des données en temps réel.
                        </p>
                        {{-- <a href="{{route('sap')}}" class="btn btn-warning py-2">Découvrez la solution</a> --}}
                        <div class="col-lg-12 order-lg-1 d-none d-lg-block mt-5">
                            <a href="{{route('sap')}}" class="btn py-2" style="background-color: #ffdd15;">Découvrez la solution</a>
                        </div>

                    </div>

                    <div class="col-lg-6 faq-item order-lg-1" data-aos="fade-up">
                        <img src="{{asset('assets/img/sap-busines.png')}}" class="img-fluid rounded-sm" alt="">
                    </div>

                    <div class="col-lg-12 order-lg-1 text-center d-block d-lg-none">
                        <a href="{{route('sap')}}" class="btn py-2" style="background-color: #ffdd15;">Découvrez la solution</a>
                    </div>

                </div>

                {{-- <div class="row py-3 d-flex align-items-stretch">
                    <div class="col-lg-6 faq-item" data-aos="fade-up">
                        <img src="{{asset('assets/img/rsm-phone.png')}}" style="width: 50%" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="pt-4">Qu'est-ce que SAP RSM (Resource sourcing management) ? </h2>
                        <p class="text-justify">
                            Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion
                            pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
                        </p>
                        <a href="{{route('rsm')}}" class="btn btn-warning py-2">Découvrez la solution</a>
                    </div>
                </div> --}}



                {{-- <div class="row py-3 d-flex align-items-stretch">
                    <div class="col-lg-6 faq-item order-lg-2" data-aos="fade-up">
                        <h2 class="pt-4">Qu'est-ce que SAP RSM (Resource sourcing management) ? </h2>
                        <p class="text-justify">
                            Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion
                            pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
                        </p>
                        <a href="{{route('rsm')}}" class="btn btn-warning py-2">Découvrez la solution</a>
                    </div>
                    <div class="col-lg-6 faq-item order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('assets/img/rsm-phone.png')}}" style="width: 50%" class="img-fluid" alt="">
                    </div>
                </div> --}}


                <div class="row py-3 d-flex align-items-stretch">
                    <div class="col-lg-6 faq-item order-lg-2" data-aos="fade-up">
                        <h2 class="pt-4">Qu'est-ce que SAP RSM (Resource sourcing management) ? </h2>
                        <p class="text-justify">
                            Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion
                            pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
                        </p>

                        <div class="col-lg-12 order-lg-1 d-none d-lg-block mt-5">
                            <a href="{{route('rsm')}}" class="btn py-2" style="background-color: #ffdd15;">Découvrez la solution</a>
                        </div>

                    </div>
                    <div class="col-lg-6 faq-item order-lg-1 imgcenter" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('assets/img/rsm-phone.png')}}" style="width: 50%" class="img-fluid" alt="">
                    </div>
                    <!-- Balise <a> ajoutée ici pour apparaître après la div de l'image sur les écrans mobiles -->
                    <div class="col-lg-12 order-lg-1 text-center d-block d-lg-none">
                        <a href="{{route('rsm')}}" class="btn py-2" style="background-color: #ffdd15;">Découvrez la solution</a>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- End About Lists Section -->


        <!-- ======= Our Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg pt-0 pb-4">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="section-title">
                    <h2>Nos projets réalisés</h2>
                    <p>Découvrez ici quelques projets réalisés pour nos partenaires et clients.</p>
                </div>

                <div class="row portfolio-container">

                    @foreach ($projets as $projet)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="/storage/projet_image/{{ $projet->image }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $projet->title }}</h4>
                                    <p>{{ Str::limit($projet->description, 35) }}</p>
                                    <div class="portfolio-links">

                                        <a href="{{ $projet->lien }}">
                                            <i class="bi bi-plus"></i>
                                        </a>
                                        {{-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- End Our Portfolio Section -->

        <!-- ======= Counts Section ======= -->
        <section class="counts section-bg pt-0">
            <div class="container">
                <div class="section-title">
                    <h2>Statistiques</h2>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                        <div class="count-box">
                            <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>ÉQUIPE DE 10 PASSIONNÉS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>ANS D'EXISTENCE</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="count-box">
                            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2"
                                class="purecounter"></span>
                            <p>% DÉDIÉS À NOS CLIENTS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                        <div class="count-box">
                            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">

                    <div class="col-6 mb-4">
                        <h3 class="
                            style="
                            font-size: 32px;
                            font-weight: 600;
                            margin-bottom: 20px;
                            padding-bottom: 0;
                            color: #5c768d;
                        ">
                            Nos partenaires et clients</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary mr-1" href="#carouselExampleIndicators2" role="button"
                            data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary " href="#carouselExampleIndicators2" role="button"
                            data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-4 col-xs-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner.png') }}">

                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner1.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner2.png') }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 col-xs-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner3.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 mb-3">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner5.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 mb-3">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner6.png') }}">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-12 col-sm-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner7.png') }}">

                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner8.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner9.png') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12">
                                            <div>
                                                <img class="img-fluid" alt="100%x280"
                                                    src="{{ asset('assets/img/partner/partner10.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        {{-- Fin --}}


        <!-- Contact -->
        <section id="contact" class="contact">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">

                    <div class="col">
                        <div class="col-lg d-flex aos-init aos-animate" data-aos="fade-up">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h4>Notre adresse</h4>
                                <p>ATTOBAN,
                                    30 ème arrondissement
                                </p>
                            </div>
                        </div>

                        <div class="col-lg d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h4>Email</h4>
                                <p>
                                    contact@croissancenumerique.ci
                                    {{-- <br>contact@example.com --}}
                                </p>
                            </div>
                        </div>

                        <div class="col-lg d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="info-box ">
                                <i class="bx bx-phone-call"></i>
                                <h4>Contactez-nous</h4>
                                <p>+225 07 07 540 555
                                    {{-- <br>+1 6678 254445 41 --}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d993.0707894117758!2d-3.984357699185542!3d5.373721538027353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1edd6ea31e79f%3A0x1cb6dff0d3e1919f!2sCroissance%20Numerique!5e0!3m2!1sfr!2sci!4v1707911881538!5m2!1sfr!2sci"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </section>
        <!-- End contact -->




        {{-- <section><div class="owl-carousel owl-theme mt-5">
        <div class="owl-item">
            <div>
              sssss
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Denis Richie
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div>
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Lisa Sthalekar
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div>
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Elizabith Richie
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div>
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Daniel Xavier
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1832959/pexels-photo-1832959.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Emma Watson
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/718261/pexels-photo-718261.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                <div class="name">
                    Mohammad Imran
                </div>
            </div>
        </div>
    </div></section> --}}



    </main>
    <!-- End #main -->
@endsection
