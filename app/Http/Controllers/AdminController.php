<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\Docentes;
use Illuminate\Http\Request;
use App\Models\Materias;
use App\Models\Usuarios;

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

    public function guardarAlumno(Request $request)
    {
        $nuevoAlumno = new Usuarios();
        $nuevoAlumno->correo = $request->correo;
        $nuevoAlumno->contrasena = $request->contrasena;
        $nuevoAlumno->idRol = 3;
        $nuevoAlumno->activo = 1;
        $nuevoAlumno->save();

        $Datos = Usuarios::latest()->first();

        $numero_aleatorio = rand(50000, 100000);

        $relacion = new Alumnos();
        $relacion->nombres = "";
        $relacion->apPaterno = "";
        $relacion->apMaterno = "";
        $relacion->Matricula = $numero_aleatorio;
        $relacion->idUsuario = $Datos->idUsuario;
        $relacion->save();
    
        return back()->with('mensaje', 'Alumno agregado');

    }

    public function mostrarDocentes()
    {
        return view('admin.docentes');
    }


    public function registrarDocente()
    {
        return view('admin.registrodocentes');
    }

    public function guardarDocente(Request $request)
    {
        $nuevoAlumno = new Usuarios();
        $nuevoAlumno->correo = $request->correo;
        $nuevoAlumno->contrasena = $request->contrasena;
        $nuevoAlumno->idRol = 2;
        $nuevoAlumno->activo = 1;
        $nuevoAlumno->save();

        $Datos = Usuarios::latest()->first();

        $numero_aleatorio = rand(50000, 100000);

        $relacion = new Docentes();
        $relacion->nombres = "";
        $relacion->apPaterno = "";
        $relacion->apMaterno = "";
        $relacion->noEmpleado = $numero_aleatorio;
        $relacion->idUsuario = $Datos->idUsuario;
        $relacion->save();
    
        return back()->with('mensaje', 'Docente agregado, ');

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
        $nuevaMateria->activo = 1;
        
    
        $nuevaMateria->save();
    
        return back()->with('mensaje', 'Materia agregada');
    }

}
