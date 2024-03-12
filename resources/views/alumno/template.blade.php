<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title></title>
    
    
    <!-- Bootstrap core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="{{ route('alumno.dashboardalumno') }}"><em>EduPortal</em> </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <a>Bienvenido {{ $valor_almacenado }}</a>
        <li><a href="{{ route('alumno.calificaciones') }}" class="external">Calificaciones</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        
        <li><a href="{{ route('alumno.grupos') }}" class="external">Grupos</a></li>
        <li><a href="{{ route('alumno.informacion') }}" class="external">Mi informacion</a></li>
        <li><a href="{{ route('alumno.configurar') }}" class="external">Configurar</a></li>
        <li><a href="{{ route('auth.login') }}" class="external">Cerrar sesión</a></li>
      </ul>
    </nav>
  </header>

  
  
  


  @yield('contenido')


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 | Diseño: <a href="https://utc.edu.mx/" rel="sponsored" target="_parent">Grupo 7IDGSB</a></p>
        </div>
      </div>
    </div>
  </footer>

  
  

 

  
        
        <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->
                    
        

  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../../../assets/js/isotope.min.js"></script>
    <script src="../../../assets/js/owl-carousel.js"></script>
    <script src="../../../assets/js/lightbox.js"></script>
    <script src="../../../assets/js/tabs.js"></script>
    <script src="../../../assets/js/video.js"></script>
    <script src="../../../assets/js/slick-slider.js"></script>
    <script src="../../../assets/js/custom.js"></script>
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
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
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

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>