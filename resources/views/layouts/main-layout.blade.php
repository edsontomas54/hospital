<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Centro de Saúde São Dâmaso</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('../assets/img/favicon/Emblem_of_Mozambique__1982-1990_.svg.ico') }}" rel="icon" type="image/x-icon">
  <link href="{{ asset('../assets/img/favicon/Emblem_of_Mozambique__1982-1990_.svg.ico') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <link
  href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
  rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{'../assets2/vendor/fontawesome-free/css/all.min.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/animate.css/animate.min.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/bootstrap-icons/bootstrap-icons.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/boxicons/css/boxicons.min.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/glightbox/css/glightbox.min.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/remixicon/remixicon.css'}}" rel="stylesheet">
  <link href="{{'../assets2/vendor/swiper/swiper-bundle.min.css'}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{'../assets2/css/style.css'}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  @livewireStyles
</head>

<body>

      <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <div class="contact-info d-flex align-items-center">
            <a class="bi bi-envelope me-2" href="mailto:info.geral@misau.com"> info.geral@misau.com</a>
            <a class="bi bi-phone me-2" href="tel:+258840936000"> +258 840 936 000</a>
            <a class="bi bi-geo-alt me-2" href="https://maps.app.goo.gl/QBy7GRywCmA6kBc48"> Matola, Patrice Lumumba, São Dâmaso</a>
        </div>
    </div>
</div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
{{--
      <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo me-auto">
        <img src="../assets/img/fotos/Emblem_of_Mozambique_(1982-1990).svg.png" alt="Emblem of Mozambique" class="img-fluid">
    </a>


      <nav id="navbar" class="navbar  order-last order-lg-0">
        <ul >
          <li><a class="nav-link scrollto active" href="/">Início</a></li>
          <li><a class="nav-link scrollto" href="{{route('admin.login')}}">Entrar</a></li>
          <li><a class="nav-link scrollto" href="{{route('user.appointment')}}">Suas Marcacoes</a></li>
          {{-- <li><a class="nav-link scrollto" href="{{route('admin.dashboard')}}">Dashboard</a></li> --}}

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
              </li> --}}
              {{-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> --}}
          {{-- </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contacte-nos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Marcar consulta</a>
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />

    </div>
  </header><!-- End Header -->


    {{$slot}}

     <!-- Vendor JS Files -->
<script src="{{'../assets2/vendor/purecounter/purecounter_vanilla.js'}}"></script>
<script src="{{'../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<script src="{{'../assets2/vendor/glightbox/js/glightbox.min.js'}}"></script>
<script src="{{'../assets2/vendor/swiper/swiper-bundle.min.js'}}"></script>
<script src="{{'../assets2/vendor/php-email-form/validate.js'}}"></script>

<!-- Template Main JS File -->
<script src="{{'../assets2/js/main.js'}}"></script>
@livewireScripts

  <script>

    document.getElementById('gender').addEventListener('change', function () {
      var gender = this.value;
      var specialtyOptions = document.querySelectorAll('#specialty option.female-only');

      if(gender!=""){
          if (gender === 'female') {
            specialtyOptions.forEach(function(option) {
              option.disabled = false;
            });
          } else {
            specialtyOptions.forEach(function(option) {
              option.disabled = true;
            });
          }
      }else{
        specialtyOptions.forEach(function(option) {
            option.disabled = true;
        });
      }

    });
  </script>
</body>

</html>
