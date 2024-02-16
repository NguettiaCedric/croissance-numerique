 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@croissancenumerique.ci">
          contact@croissancenumerique.ci
        </a>
        <i class="bi bi-phone-fill phone-icon"></i>  +225 07 07 540 555
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a href="/"><img src="{{asset('assets/logo/logo.png')}}" alt="logo"></a>

        {{-- <h1><a href="index.html">Mamba</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Accueil</a></li>
          <li><a class="nav-link scrollto" href="/a-propos">A propos</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('integration')}}">Integration de Solutions</a></li>
              <li><a href="{{route('accompagnement')}}">Accompagnement Digital</a></li>
              <li><a href="{{route('developpement')}}">Development d'Application</a></li>
            </ul>
          </li>

          {{-- <li><a class="nav-link scrollto" href="#services">Solutions</a></li> --}}

          <li class="dropdown"><a href="#"><span>Solutions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('sap')}}">SAP Business One</a></li>
              <li><a href="{{route('rsm')}}">SAP RSM</a></li>
              {{-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> --}}
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#portfolio">Projets</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}

          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}

          <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
    
          {{-- <a href="" class="buthover">
   <button  type="button" class="btn ms-2" style="
  border: 1px #1b75bb solid; color:#1b75bb "> Demander <br> une Demo </button></a> --}}



  <a href="{{route('demande-demo')}}" class="buthover">
    <button type="button" class="btn ms-2 demo-btn">
      Demander une Demo
    </button>
  </a>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->