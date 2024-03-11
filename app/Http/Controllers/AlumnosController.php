<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function home()
    {
        return view('alumno.dashboardalumno');
    }

    public function mostrarCalificaciones()
    {
        return view('alumno.calificaciones');
    }
    public function mostrarGrupos()
    {

        

        return view('alumno.grupos');
    }
}
