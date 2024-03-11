@extends('admin.template')
@section('contenido')

<section class="section coming-soon" data-section="section3">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-xs-12">
        <div class="continer centerIt">
          <div>
            <h4>¡Bienvenid@ al <em>apartado de registro de alumnos</em>!</h4>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="right-content">
          <div class="top-content">
            <h6>Complete el <em>siguiente formulario</em> para registrar al alumno(a):</h6>
          </div>
          <form id="contact" action="{{ route('admin.guardaralumno') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <input name="correo" type="email" class="form-control" id="correo" placeholder="Correo electronico" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <input name="contrasena" type="password" class="form-control" id="password" placeholder="Contraseña" required="">
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Agregar</button>
                </fieldset>
                <fieldset>
                  @if ( session('mensaje') )
                  <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section video" data-section="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="left-content">
          <span>¡Gracias por visitar nuestro sitio!</span>
          <h4>¿Quieres conocer más acerca de la <em>Universidad Tecnológica de Coahuila</em>?</h4>
          <br>El 27 de febrero del 1997, el entonces Presidente de la República Mexicana, Ernesto Zedillo Ponce de León, inauguró las instalaciones de la Universidad Tecnológica de Coahuila en la ciudad de Ramos Arizpe, estableciendo así un serio compromiso de colaboración entre los sectores productivo y educativo.</p>
          <div class="main-button"><a rel="nofollow" href="https://www.utc.edu.mx/index.php/conoce-utc/historia" target="_parent">Conoce Más</a></div>
        </div>
      </div>
      <div class="col-md-6">
        <article class="video-item">
          <div class="video-caption">
            <h4>Universidad Tecnológica de Coahuila</h4>
          </div>
          <figure>
            <a href="https://www.youtube.com/watch?v=cQzIgA5IUMY" target="_blank"><img src="assets/images/utc.jpeg"></a>
          </figure>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection