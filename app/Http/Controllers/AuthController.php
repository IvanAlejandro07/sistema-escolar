<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class AuthController extends Controller
{
    public function flogin()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {

        $request->validate([
            'correo' => 'required',
            'contrasena' => 'required'
        ]);

        $consulta = Usuarios::select('idRol', 'idUsuario', 'correo', 'contrasena')
            ->where('correo', $request->correo)
            ->where('contrasena', $request->contrasena)
            ->get();

        


        // if( $datos[0]->correo == $request->correo and $datos[0]->contrasena == $request->contrasena){

        //     $info = Usuarios::select('idUsuario','idRol')->where('correo', $request->correo)->where('contrasena', $request->contrasena)->get();


        if ( count($consulta) >= 1 ){
            $datos = $consulta[0];
            $datos->idUsuario = session('idUsuario');

            switch ($datos->idRol) {
                case 1:
                    return redirect('admin');
                    break;
    
                case 2:
                    return redirect('docente');
                    break;
    
                case 3:
                    return redirect('alumno');
                    break;
            }
        }

      
        // }

        return back()->with('mensaje', 'Credenciales incorrectas');
    }
}
