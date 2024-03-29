<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Calificaciones;
use App\Models\Usuarios;
use App\Models\Grupos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function home()
    {
        return view('alumno.dashboardalumno');
    }

    public function mostrarCalificaciones()
    {
        $informacion = Calificaciones::where('idAlumno', 1)->get();
        return view('alumno.calificaciones',['calificaciones'=>$informacion]);
    }
    public function mostrarGrupos()
    {
        $informacion = Grupos::where('idAlumno', 1)->get();

        return view('alumno.grupos',['grupos'=>$informacion]);
    }

    public function configurar()
    {
        return view('alumno.configuracion');
    }

    public function mostrarInformacion()
    {

        $idAlumno = Alumnos::where('idAlumno', 1)->get();

        $informacion = Alumnos::join('usuarios as u', 'alumnos.idUsuario', '=', 'u.idUsuario')
            ->where('idAlumno','=', $idAlumno[0]->idAlumno)
            ->select('u.correo', 'alumnos.nombres', 'alumnos.apPaterno', 'alumnos.apMaterno', 'alumnos.Matricula')
            ->get();


        return view('alumno.informacion', ['informacion' => $informacion]);
    }

    public function guardarInformacion(Request $request)
    {

        $idUsuario = 1;

        $nuevoInformacion = Alumnos::where('idUsuario', $idUsuario)->get();
        $nuevoInformacion->nombres = $request->nombres;
        $nuevoInformacion->apPaterno = $request->apPaterno;
        $nuevoInformacion->apMaterno = $request->apMaterno;

        Alumnos::where('idUsuario', $idUsuario)
            ->update([
                'nombres' => $nuevoInformacion->nombres,
                'apPaterno' => $nuevoInformacion->apPaterno,
                'apMaterno' => $nuevoInformacion->apMaterno
            ]);

        return back()->with('mensaje', 'Informacion Actualizada');
    }
}
