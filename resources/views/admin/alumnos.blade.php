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
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">correo</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($informacion as $info)
                    <tr>
                        <th scope="row">{{$info->nombres}}</th>
                        <td>{{$info->apPaterno}}</td>
                        <td>{{$info->apMaterno}}</td>
                        <td>{{$info->Matricula}}</td>
                        <td>{{$info->correo}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection