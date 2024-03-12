<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use App\Models\Grupos;
use App\Models\Alumnos;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function home()
    {
        return view('docente.dashboarddocente');
    }
    public function mostrarAlumnos()
    {
        $informacion = Alumnos::join('calificaciones as u', 'alumnos.idAlumno', '=', 'u.idAlumno')
            
            ->select('u.Calificacion', 'alumnos.nombres', 'alumnos.apPaterno', 'alumnos.apMaterno', 'alumnos.Matricula')
            ->get();

        return view('docente.alumnos',['informacion'=>$informacion]);
    }
    public function mostrarGrupos()
    {
        $informacion = Grupos::where('idDocente', 1)->get();

        return view('docente.grupos',['grupos'=>$informacion]);
    }
    public function mostrarInformacion()
    {
        $idDocente = Docentes::where('idDocente', 1)->get();

        $informacion = Docentes::join('usuarios as u', 'docentes.idUsuario', '=', 'u.idUsuario')
            ->where('idDocente','=', $idDocente[0]->idDocente)
            ->select('u.correo', 'docentes.nombres', 'docentes.apPaterno', 'docentes.apMaterno', 'docentes.noEmpleado')
            ->get();


        return view('docente.informacion', ['informacion' => $informacion]);
    }

    public function configurar()
    {
        return view('docente.configuracion');
    }

    public function guardarInformacion(Request $request)
    {

        $idUsuario = 3;

        $nuevoInformacion = Docentes::where('idUsuario', $idUsuario)->get();
        $nuevoInformacion->nombres = $request->nombres;
        $nuevoInformacion->apPaterno = $request->apPaterno;
        $nuevoInformacion->apMaterno = $request->apMaterno;

        Docentes::where('idUsuario', $idUsuario)
            ->update([
                'nombres' => $nuevoInformacion->nombres,
                'apPaterno' => $nuevoInformacion->apPaterno,
                'apMaterno' => $nuevoInformacion->apMaterno
            ]);

        return back()->with('mensaje', 'Informacion Actualizada');
    }

}
