<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href=" {{ route('index') }}"><em>EDU</em> PORTAL</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="{{ route('index') }}" class="external">Inicio</a></li>

        <li><a href="#section4">Acerca De</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contacto</a></li>
      </ul>
    </nav>
  </header>



  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>EduPortal <em></em></h4>
              <h4><em></em> Conectando Conocimiento y Tecnologia para transformar la educación</h4>


            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Inicia <em>Sesión</em> Con tu cuenta</h6>
            </div>
            <form id="contact" action="{{route('auth.auth0')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="correo" type="text" class="form-control" id="correo" placeholder="Correo electrónico" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="contrasena" type="password" class="form-control" id="password" placeholder="Contraseña" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <a style="color: bisque;">¿Olvidaste tu contraseña?</a>
                  </fieldset>
                  <div class="col-md-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">Iniciar Sesión</button>
                    </fieldset>
                    <fieldset>
                      @if ( session('mensaje') )
                      <div class="alert alert-danger">{{ session('mensaje') }}</div>
                      @endif
                    </fieldset>
                    <fieldset>
                      <a href="{{ route('admin.dashboardadmin') }}">admin</a>
                    </fieldset>
                    <fieldset>
                      <a href="{{ route('alumno.dashboardalumno') }}">alumno</a>
                    </fieldset>
                    <fieldset>
                      <a href="{{ route('docente.dashboarddocente') }}">docente</a>
                    </fieldset>
                    <br>
                    <br>
                    <div class="col-md-16">
                      <fieldset>
                        <a style="color: rgba(232, 252, 12, 0.908)">EDUPORTAL</a>
                      </fieldset>

                    </div>
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 | Diseño: <a href="https://utc.edu.mx/" rel="sponsored" target="_parent">Grupo 7IDGSB</a></p>
        </div>
      </div>
    </div>
  </footer>










  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</html>