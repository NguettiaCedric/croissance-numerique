@extends('layouts')

@section('title')
 Home
@endsection

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Mamba</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.png');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
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
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. 
                Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              </p>
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
            <a href=""><button type="button" class="btn btn" style="width: 130px; background:#ffdd15">En savoir plus</button></a>

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
            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
            <h4 class="title"><a href="">Integration de solution</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident </p>
            <button type="button" class="btn" style="background: #ffdd15">En savoir plus</button>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">Accompagnement Digital</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            <button type="button" class="btn" style="background: #ffdd15">En savoir plus</button>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">Développement d'appliation</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur consequat tarad limino ata</p>
            <button type="button" class="btn" style="background: #ffdd15">En savoir plus</button>

          </div>
          {{-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar2-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> --}}
        </div>

      </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Presentation Solution ======= -->
    
    <section id="" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row  d-flex align-items-stretch">
          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            {{-- <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4> --}}
            <h2 class="pt-4">Qu'est-ce que SAP Business One ? </h2>

            <p>
              Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
            </p>
            <button type="button" class="btn w-50 mt-3" style="width: 130px; background:#ffdd15">Découvrez la solution</button>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <img src="assets/img/img1.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <img src="assets/img/img1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h2 class="pt-4">Qu'est-ce que SAP RSM (Resource sourcing management) ? </h2>
            <p>
              Gagnez en contrôle sur votre entreprise ou filiale avec SAP Business One. Ce logiciel de gestion pour petites entreprises relie et rationalise vos processus, et s'adapte à votre croissance.
            </p>
            <button type="button" class="btn w-50 mt-3" style="width: 130px; background:#ffdd15">Découvrez la solution</button>
          </div>
        </div>

      </div>
    </section>
  
    <!-- End Presentation Solution -->


    <!-- ======= About Lists Section ======= -->
    {{-- <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End About Lists Section -->

 
      <!-- ======= Our Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg pt-0 pb-4">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="section-title">
            <h2>Nos projets réalisés</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          {{-- <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div> --}}
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Installation SAP Business one</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit!</p>
                  <div class="portfolio-links">

                    <a href="#">      
                      <i class="bi bi-plus"></i>                    
                    </a>
                    {{-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Tracabilite RSM</h4>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, eius!</p>
                  <div class="portfolio-links">
                    {{-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                    <a href="#">      
                      <i class="bi bi-plus"></i>                    
                    </a>

                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>SAP RSM</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, iusto.</p>
                  <div class="portfolio-links">
                    {{-- <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                    <a href="#">      
                      <i class="bi bi-plus"></i>                    
                    </a>

                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Tracabilite RSM</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae cumque blanditiis eum libero?</p>
                  <div class="portfolio-links">
                    <a href="#">      
                      <i class="bi bi-plus"></i>                    
                    </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Tracabilite RSM</h4>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, incidunt.</p>
                  <div class="portfolio-links">
                    {{-- <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                    <a href="#">      
                      <i class="bi bi-plus"></i>                    
                    </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>RSM</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quidem? Aperiam, nostrum. Perferendis, quidem aperiam.</p>
                  <div class="portfolio-links">
                    {{-- <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> --}}
                    <a href="#">      
                      <i class="bi bi-plus"></i>                    
                    </a>
                  </div>
                </div>
              </div>
            </div>
   
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
                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                <p>ÉQUIPE DE 10 PASSIONNÉS</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
              <div class="count-box">
                <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
                <p>ANS D'EXISTENCE</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
              <div class="count-box">
                <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2" class="purecounter"></span>
                <p>% DÉDIÉS À NOS CLIENTS</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
              <div class="count-box">
                <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>

          </div>

        </div>
      </section>
      <!-- End Counts Section -->





      <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-4">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Témoignages</h2>
        </div>
        <div class="row">      

        </div>

      </div>
    </section>
    <!-- End Our Team Section -->


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-2">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img style="height: 150px; widht:150px" class="rounded-circle shadow-1-strong mb-4" src="assets/img/portfolio/portfolio-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img style="height: 150px; widht:150px" class="rounded-circle shadow-1-strong mb-4" src="assets/img/portfolio/portfolio-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img style="height: 150px; widht:150px" class="rounded-circle shadow-1-strong mb-4" src="assets/img/portfolio/portfolio-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Details Section -->





    {{-- --=== testimonials == --}}

     <section id="testimonials" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Témoignages</h2>
      <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"Le service était exceptionnel. Les employés étaient amicaux et compétents."</p>
                <h5 class="card-title">John Doe</h5>
                <p class="card-subtitle">Client satisfait</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"J'ai été impressionné par la qualité des produits. Hautement recommandé."</p>
                <h5 class="card-title">Jane Doe</h5>
                <p class="card-subtitle">Client fidèle</p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card">
              <div class="card-body">
                <p class="card-text">"J'ai été impressionné par la qualité des produits. Hautement recommandé."</p>
                <h5 class="card-title">Jane Doe</h5>
                <p class="card-subtitle">Client fidèle</p>
              </div>
            </div>
          </div>
          <!-- Ajoutez plus d'éléments carousel-items au besoin -->
        </div>
        <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
    </div>
  </section>
    {{-- --== testimonials === --}}


      <!-- Start location -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="pt-4">
            <div class="info-box">
            <i class="bx bx-map"></i>
            <h5>Notre Adresse</h5>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h5>Email</h5>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h5>Contact</h5>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>
          
        </div>

        <div class="col">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d993.0707894117758!2d-3.984357699185542!3d5.373721538027353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1edd6ea31e79f%3A0x1cb6dff0d3e1919f!2sCroissance%20Numerique!5e0!3m2!1sfr!2sci!4v1707911881538!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
      </div>
    </div>
      <!-- End location -->


  </main>
  <!-- End #main -->

@endsection
  

