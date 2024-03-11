<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function home()
    {
        return view('docente.dashboarddocente');
    }
    public function mostrarAlumnos()
    {
        return view('docente.alumnos');
    }
    public function mostrarGrupos()
    {
        return view('docente.grupos');
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
