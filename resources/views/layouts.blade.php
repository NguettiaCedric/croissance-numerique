<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Croissance numerique - vous accompagne dans les solutions SAP Business One & SAP RSM</title>
  <meta content="Tout savoir sur Croissance numerique une structure ultra rapide qui vous accompage à travers des solutions SAP Business One & SAP RMS" name="description">

  {{-- Open graff sert a etre plus visible sur les reseaux sociaux --}}
  <meta property="og:title" content="Croissance numerique" />
  {{-- <meta name="facebook:card" content="sap-busines" />
  <meta name="facebook:title" content="Croissance numerique - vous accompagne dans les solutions SAP Business One & SAP RSM"/>
  <meta property="og:title" content="Croissance numerique - partenaire solution SAP Business One & SAP RSM"/>
  <meta property="og:title" content="Croissance numerique" /> --}}

  <meta name="facebook:card" content="sap_busines" />
  <meta name="facebook:title" content="Croissance numerique - vous accompagne dans les solutions SAP Business One & SAP RSM"/>
  <meta property="og:title" content="Croissance numerique - partenaire solution SAP Business One & SAP RSM"/>




  {{-- <meta name="facebook:card" content="Croissance numerique - vous accompagne dans les solutions SAP Business One & SAP RSM" /> --}}
  {{-- <meta property="og:url" content="https://www.imdb.com/title/tt0117500/" />
  <meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" /> --}}

  <!-- Favicons -->
  {{-- <link href="{{asset("assets/logo/logo.png")}}" style="width: 270; height:270"rel="icon"> --}}
  {{-- <link href="{{asset("assets/logo/favicon.png")}}" style="width: 270; height:270"rel="icon"> --}}
  <link class="rounded-circle" href="{{asset("assets/img/faviconV2.png")}}" rel="icon">
  <link href="{{asset("assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset("assets/vendor/animate.css/animate.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">

  
  <!-- Template Main CSS File -->
  <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
  <link href="{{asset("assets/css/custome.css")}}" rel="stylesheet">
  
</head>

<body>
  <!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/65d470909131ed19d96ee98c/1hn2tfea1';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
</script> --}}
  <!--End of Tawk.to Script-->

  <!-- Start Header -->
    @include('header')
  <!-- End Header -->


  <!-- Start content -->
    @yield('content')
  <!-- End content -->



  <!-- Start Footer -->
    @include('footer')
  <!-- End Footer -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{asset("assets/js/main.js")}}"></script>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</body>

</html>