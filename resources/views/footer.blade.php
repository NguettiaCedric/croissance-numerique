 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            {{-- <h3>Mamba</h3> --}}
            <img style="
            height: 42px;
        " src="{{asset('assets/logo/logo.png')}}" alt="logo">
            <p>
              RIVIERA2 , ATTOBAN, CITE ATTOBAN 1,<br> Villa 370 D<br>
              <strong>Téléphone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> contact@croissancenumerique.ci<br>
            </p>
            <div class="social-links mt-3">
              {{-- <a href="#" class="twitter"><i class="fas fa-x-twitter"></i></a> --}}
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Liens Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/a-propos">A propos de nous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('sap')}}">SAP Business</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('rsm')}}">SAP RSM</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('developpement')}}">Développement web</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('integration')}}">Intégration de solutions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('accompagnement')}}">Accompagnement digital</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('developpement')}}">Développement d'application</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Croissance Numerique</span></strong>. Tous droits reservés
      </div>
    </div>
</footer><!-- End Footer -->