@extends('alumno.template')

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
                        <th scope="col">Materia</th>
                        <th scope="col">Calificacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calificaciones as $ca)
                    <tr>
                        <th scope="row">Arquitectura</th>
                        <td>{{$ca->Calificacion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>



@endsection