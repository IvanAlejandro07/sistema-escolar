@extends('docente.template')


@section('contenido')

<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Calificación</th>
                        <th scope="col">Opción </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Ivan</th>
                        <td>Lopez</td>
                        <td>20045102</td>
                        <td>si</td>
                        <td>8</td>
                        <td><button class="btn btn-primary"> <a href="">Calificar</a> </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection