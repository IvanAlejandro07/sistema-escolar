@extends('admin.template')

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
                        <th scope="col">Carrera</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Cuatrimestre</th>
                        <th scope="col">Nombre de la materia</th>
                        <th scope="col">Periodo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Ing Desarrollo de software</th>
                        <td>7TIDGS</td>
                        <td>7</td>
                        <td>Base de datos</td>
                        <td>Sep-Dic-2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection