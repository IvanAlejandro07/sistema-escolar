<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materias;


class AdminController extends Controller
{

    public function home()
    {
        return view('admin.dashboardadmin');
    }

    public function mostrarAlumnos()
    {
        return view('admin.alumnos');
    }

    public function registrarAlumno()
    {
        return view('admin.registroalumnos');
    }

    public function mostrarDocentes()
    {
        return view('admin.docentes');
    }


    public function registrarDocente()
    {
        return view('admin.registrodocentes');
    }



    public function mostrarMaterias()
    {
        $materias = Materias::all();

        return view('admin.materias', ['materias' => $materias]);
    }

    public function registrarMateria()
    {
        return view('admin.materia');
    }

    public function guardarMateria(Request $request)
    {
        $nuevaMateria = new Materias();

        $nuevaMateria->clave = $request->clave;
        $nuevaMateria->nombre = $request->nombre;
        $nuevaMateria->activo = $request->activo;
        
    
        $nuevaMateria->save();
    
        return back()->with('mensaje', 'Materia agregada');
    }
}
