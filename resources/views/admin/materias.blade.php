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
                        <th scope="col">Nombre</th>
                        <th scope="col">Clave</th>
                        <th scope="col">activo</th>
                        <th scope="col">Fecha de creacion</th>
                        <th scope="col">Modificacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                    <tr>
                        <th scope="row">{{ $materia->nombre }}</th>
                        <td>{{ $materia->clave }}</td>
                        <td>{{  
                            $materia->activo = 1
                                ? "Activa"
                                : "Desactivada"
                        }}
                        </td>
                        <td>{{ $materia->created_at }}</td>
                        <td>{{ $materia->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection