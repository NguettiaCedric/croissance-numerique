@extends('layouts')
@section('title')
    About
@endsection

@section('content')
    <div class="container-fluid">
        <!-- About Content -->
        <div class="about-main py-5">
            <div class="row py-4">
                <div class="col-lg-6">
                    <img class="img-fluid rounded" src="{{ asset('assets/img/img1.jpg') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <h1 class="text-capitalize">A propos de nous</h1>
                    <div class="align-items-center">
                        <p class="text-justify">Chez Croissance Numerique, nous réduisons la complexité opérationnelle liée
                            à la croissance pour
                            aider les PME à atteindre leurs objectifs et leurs ambitions. Nous sommes fiers d’être un
                            partenaire privilégié de <a href="{{route('sap')}}">SAP Business One</a> pour accompagner les entreprises
                            dans toutes les étapes de leurs projets d’expansion.</p>
                        <p>Notre équipe est prête à répondre aux besoins de votre entreprise !</p>
                        <p>
                            <a href="{{route('contact')}}" class="btn btn-outline-primary">Contactez-nous <i
                                    class="fa fa-arrow-circle-right"></i> </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row py-5" style="background-color: #f9f9f9;">
                <div class="col-lg-6 col-md-6 d-flex align-items-center">
                    <h2 class="text-center">Qui sommes-nous ?</h2>
                    
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="text-justify">Créée en 2016 par Monsieur <strong>LOUIS DIAKITE</strong> (Président du Groupe
                        ALINK) dans le but
                        de proposer, d’assister et d’intégrer des solutions applicatives adaptées aux besoins réels des
                        clients, Croissance Numerique est une société de services spécialisée dans l’accompagnement des
                        entreprises dans leur transformation digitale. Nous aidons les petites et moyennes
                        entreprises à simplifier leurs
                        processus opérationnels clés pour maximiser leur efficacité et leur rentabilité.</p>
                    <p class="text-justify">
                        En tant que partenaire de confiance de <a href="{{route('sap')}}">SAP Business One</a> , nous sommes
                        déterminés à propulser les
                        entreprises de nos clients à un niveau supérieur. Notre approche est complète : nous agissons comme
                        une précieuse extension de votre équipe tout au long du processus, en nous concentrant sur
                        l’amélioration de votre entreprise dans son ensemble.
                    </p>
                    <p class="text-justify">
                        Notre expertise dans de nombreux secteurs, notamment la distribution, l’agroalimentaire,
                        l’agriculture et la fabrication en Amérique du Nord, nous a permis de développer une méthodologie
                        éprouvée qui permet aux PME d’atteindre rapidement et efficacement les objectifs qui leur tiennent
                        le plus à cœur.
                    </p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/img1.jpg') }}" class="img-fluid rounded" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-up">
                    <h2>Notre mission</h2>
                    <p>
                        Chez Croissance Numerique, nous nous engageons à aider les petites et moyennes entreprises à
                        réaliser leur
                        plein potentiel et à améliorer leur rentabilité. Nous fournissons des solutions simples et
                        abordables qui facilitent les tâches de gestion quotidiennes. Notre objectif est de vous aider à
                        maximiser votre croissance grâce à la rationalisation et à l'automatisation des processus d'affaires
                        essentiels dans votre entreprise.
                    </p>
                    <h2>Notre Vision</h2>
                    <p>
                        Notre objectif est de devenir le premier partenaire de solutions SAP pour les PME en Amérique du
                        Nord.
                    </p>
                </div>
            </div>
            <section id="team" class="team" style="background-color: #56ABE2;">
                <div class="container-fluid" data-aos="fade-up">

                    <div class="section-title">
                        <h2 style="color: white;">Notre Equipe</h2>
                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                            <div class="member">
                                <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="member">
                                <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="member">
                                <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Our Team Section -->

        </div>
    </div>
@endsection
