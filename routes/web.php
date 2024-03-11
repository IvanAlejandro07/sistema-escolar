<?php

use Illuminate\Support\Facades\Route;
use App\Models\Materias;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/auth', function () {
    return view('auth.login');
})->name('auth.login');



//Admin controller



Route::controller(AdminController::class) -> group(function(){
    Route::get('/admin', 'home')->name('admin.dashboardadmin');
});





//admin
// Route::get('/admin', function () {
//     return view('admin.dashboardadmin');
// })->name('admin.dashboardadmin');

Route::get('/admin/registraralumno', function () {
    return view('admin.registroalumnos');
})->name('admin.registroalumno');

Route::get('/admin/registrardocente', function () {
    return view('admin.registrodocentes');
})->name('admin.registrodocente');

Route::get('/admin/docentes', function () {
    return view('admin.docentes');
})->name('admin.docentes');

Route::get('/admin/alumnos', function () {
    return view('admin.alumnos');
})->name('admin.alumnos');


Route::get('/admin/materia', function () {

    return view('admin.materia');
})->name('admin.materia');

Route::get('/admin/materias', function () {
    $materias = Materias::all();

    return view('admin.materias', ['materias'=>$materias]);
})->name('admin.materias');


Route::post('/admin/materia', function (Request $request) {

    $nuevaMateria = new App\Models\Materias();

    $nuevaMateria->clave = $request->clave;
    $nuevaMateria->nombre = $request->nombre;
    $nuevaMateria->activo = $request->activo;
    

    $nuevaMateria->save();

    return back()->with('mensaje', 'Materia agregada');
})->name('admin.gmateria');












//alumnos
Route::get('/alumno', function () {
    return view('alumno.dashboardalumno');
})->name('alumno.dashboardalumno');

Route::get('/alumno/calificaciones', function () {
    return view('alumno.calificaciones');
})->name('alumno.calificaciones');

Route::get('/alumno/grupos', function () {
    return view('alumno.grupos');
})->name('alumno.grupos');




//docentes
Route::get('/docente', function () {
    return view('docente.dashboarddocente');
})->name('docente.dashboarddocente');


Route::get('/docente/alumnos', function () {
    return view('docente.alumnos');
})->name('docente.alumnos');


Route::get('/docente/grupos', function () {
    return view('docente.grupos');
})->name('docente.grupos');



