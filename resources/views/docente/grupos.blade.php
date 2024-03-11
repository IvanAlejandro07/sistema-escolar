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
                        <th scope="col">Id materia</th>
                        <th scope="col">Clave</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Activa</th>
                        <th scope="col">Otros</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>5asd48</td>
                        <td>Matematicas</td>
                        <td>si</td>
                        <td><button class="btn btn-primary"><a href="">Ver alumnos</a></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection