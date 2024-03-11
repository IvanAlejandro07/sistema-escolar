<?php

use Illuminate\Support\Facades\Route;
use App\Models\Materias;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\DocentesController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/auth', function () {
    return view('auth.login');
})->name('auth.login');



//Admin controller



Route::controller(AdminController::class)->group(function () {
    Route::get('/admin',                    'home')->name('admin.dashboardadmin');

    Route::get('/admin/alumnos',            'mostrarAlumnos')->name('admin.alumnos');
    Route::get('/admin/registraralumno',    'registrarAlumno')->name('admin.registroalumno');
    Route::post('/admin/galumno',    'guardarAlumno')->name('admin.guardaralumno');

    Route::get('/admin/docentes',           'mostrarDocentes')->name('admin.docentes');
    Route::get('/admin/registrardocente',   'registrarDocente')->name('admin.registrodocente');
    Route::post('/admin/gdocente',    'guardarDocente')->name('admin.guardardocente');



    Route::get('/admin/materias',            'mostrarMaterias')->name('admin.materias');
    Route::get('/admin/fmateria',            'registrarMateria')->name('admin.materia');
    Route::post('/admin/gmateria',           'guardarMateria')->name('admin.gmateria');
});


Route::controller(AlumnosController::class)->group(function () {

    Route::get('/alumno',                            'home')->name('alumno.dashboardalumno');
    Route::get('/alumno/configuracion',              'configurar')->name('alumno.configurar');
    Route::get('/alumno/informacion',              'mostrarInformacion')->name('alumno.informacion');
    Route::get('/alumno/calificaciones',             'mostrarCalificaciones')->name('alumno.calificaciones');
    Route::get('/alumno/grupos',                     'mostrarGrupos')->name('alumno.grupos');

    Route::post('/alumno/ginformacion',              'guardarInformacion')->name('alumno.guardarinformacion');
});


Route::controller(DocentesController::class)->group(function(){

    Route::get('/docente',                            'home')->name('docente.dashboarddocente');
    Route::get('/docente/alumnos',                    'mostrarAlumnos')->name('docente.alumnos');
    Route::get('/docente/configuracion',              'configurar')->name('docente.configurar');
    Route::get('/docente/informacion',              'mostrarInformacion')->name('docente.informacion');
    Route::get('/docente/grupos',                     'mostrarGrupos')->name('docente.grupos');

    Route::post('/docente/ginformacion',              'guardarInformacion')->name('docente.guardarinformacion');

});




