<?php

namespace App\Http\Controllers;

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
}
