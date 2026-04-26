<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\ContactoController;*/

/*Ruta para la vista de inicio de laravel*/
Route::get('/', function () {
    return view('frontend.welcome');
});

/*Ruta para la vista 'principal'*/
Route::get('/principal', function () {
return view('frontend.principal');
});

/*Ruta para la vista de los catálogos 'hombres' 'mujeres' */
Route::get('/hombres/{categoria?}', function ($categoria = null) {
 return view('catalogo.hombres', compact('categoria'));
});

Route::get('/mujeres/{categoria?}', function ($categoria = null) {
 return view('catalogo.mujeres', compact('categoria'));
});

Route::get('/contactos', function () {
    return view('partials.contactos'); 
});
Route::post('/contactos', function () {
    return "Consulta enviada correctamente";
});

Route::get('/terminos-y-usos', function () {
    return view('partials.terminos-y-usos'); 
});

 Route::get('/consultas', function () {
    return view('partials.consultas'); 
});

Route::get('/quienes-somos', function () {
    return view('partials.quienes-somos');
});

/*Route::get('/contacto', [ContactoController::class, 'index']); 
Route::post('/contacto', [ContactoController::class, 'procesar']);*/