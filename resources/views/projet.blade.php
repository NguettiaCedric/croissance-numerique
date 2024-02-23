@extends('layouts')
@section('title')
 About
@endsection


@section('content')


<section id="hero" style="height: 400px;">
    <div class="hero-container">
        <div id="" class="" data-bs-ride="" data-bs-interval="">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('assets/img/sap-icones-solutions.png'); width:100%;">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown text-center">Projets réalisés</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="container">
    <section id="portfolio" class="portfolio section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="row portfolio-container" style="">
                {{-- @dump($projets) --}}
                @foreach ($projets as $projet)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="">
                        <div class="portfolio-wrap">
                            {{-- <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""> --}}
                            <img src="/storage/projet_image/{{ $projet->image }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $projet->title }}</h4>
                                <p>{{ Str::limit($projet->description, 35) }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ $projet->lien }}">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
@endsection