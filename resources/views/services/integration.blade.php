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
                  <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                  <li class="breadcrumb-item">Services</li>
                  <li class="breadcrumb-item active" aria-current="page">Intégration de solutions</li>
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
              <h2 class="pt-4">Qu'est-ce que SAP Business One ? </h2>
  
              <p>
                Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
              </p>
              <a href="{{route('sap')}}" class="btn btn-primary py-3">Découvrez la solution</a>
            </div>
  
            <div class="col-lg-6 faq-item" data-aos="fade-up">
              <img src="{{asset('assets/img/img1.jpg')}}" class="img-fluid" alt="">
            </div>
          </div>
  
          <div class="row py-3 d-flex align-items-stretch">
  
            <div class="col-lg-6 faq-item" data-aos="fade-up">
              <img src="{{asset('assets/img/img1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
              <h2 class="pt-4">Qu'est-ce que SAP RSM (Resource sourcing management) ? </h2>
              <p>
                Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
              </p>
              <a href="{{route('rsm')}}" class="btn btn-primary py-3">Découvrez la solution</a>
            </div>
          </div>
  
        </div>
      </section>
@endsection