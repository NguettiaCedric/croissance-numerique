@extends('layouts')

@section('title')
    SAP Business One
@endsection

@section('content')
    <section id="about" class="about" style="background-color: #f5f5f5;">
        <div class="container" data-aos="fade-up">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assets/img/sap-1.jpg') }}" class="img-fluid rounded" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
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
    <div class="row">
        
    </div>
@endsection
