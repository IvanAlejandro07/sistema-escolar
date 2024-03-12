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
                        <th scope="col">Grupos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($grupos as $info)
                        <th scope="row">{{$info->nombre}}</th>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection