@extends('layouts')

@section('title')
    Détail projet
@endsection

@section('content')
     {{-- @dump($projet) --}}
     <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img src="/storage/projet_image/{{$projet->image}}" alt="">
                  </div>
  
                  {{-- <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                  </div>
  
                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                  </div> --}}
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              {{-- <div class="portfolio-info">
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong>: Web design</li>
                  <li><strong>Client</strong>: ASU Company</li>
                  <li><strong>Project date</strong>: 01 March, 2020</li>
                  <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                </ul>
              </div> --}}
              <div class="portfolio-description">
                <h2>{{$projet->title}}</h2>
                <p>
                    {{ $projet->description}}
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
      <!-- End Portfolio Details Section -->
@endsection