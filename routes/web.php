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


/*Route::get('/contacto', [ContactoController::class, 'index']); 
Route::post('/contacto', [ContactoController::class, 'procesar']);*/