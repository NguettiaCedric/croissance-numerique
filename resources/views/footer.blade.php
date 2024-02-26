 <!-- ======= Footer ======= -->
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            {{-- <h3>Mamba</h3> --}}
           {{--  <img style="
            height: 42px;
        " src="{{asset('assets/logo/logo.png')}}" alt="logo"> --}}
            <p>
              Riviera Attoban, 30ème Arrondissement<br>
              <strong>Téléphone:</strong>+225 07 07 17 04 07<br>
              <strong>Email:</strong> <a href="mailto:contact@croissancenumerique.ci">
              <span class="custom-email text-white">contact@croissancenumerique.ci</span> 
             </a><br>
            </p>
            <div class="social-links mt-3">
              {{-- <a href="#" class="twitter"><i class="fas fa-x-twitter"></i></a> --}}
              <a href="https://www.facebook.com/croissancenumerique?mibextid=ZbWKwL" class="facebook" style="background: #ffdd15;"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.linkedin.com/company/croissance-num%C3%A9rique/" class="linkedin" style="background: #ffdd15;"><i class="bx bxl-linkedin"></i></a>
              {{-- <a href="#" class="youtube" style="background: #ffdd15;"><i class="bx bxl-youtube"></i></a> --}}
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