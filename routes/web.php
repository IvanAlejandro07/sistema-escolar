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
    Route::get('/admin',                    'home')->name('admin.dashboardadmin');
    
    Route::get('/admin/alumnos',            'mostrarAlumnos')->name('admin.alumnos');
    Route::get('/admin/registraralumno',    'registrarAlumno')->name('admin.registroalumno');
    
    Route::get('/admin/docentes',           'mostrarDocentes')->name('admin.docentes');
    Route::get('/admin/registrardocente',   'registrarDocente')->name('admin.registrodocente');


    
    Route::get('/admin/materias',            'mostrarMaterias')->name('admin.materias');
    Route::get('/admin/fmateria',           'registrarMateria')->name('admin.materia');
    Route::post('/admin/gmateria',           'guardarMateria')->name('admin.gmateria');
});











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



