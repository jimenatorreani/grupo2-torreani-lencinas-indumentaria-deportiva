<?php

use Illuminate\Support\Facades\Route;
/*use App\Http\Controllers\ContactoController;*/

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/principal', function () {
return view('frontend.principal');
});


/*Route::get('/contacto', [ContactoController::class, 'index']); 
Route::post('/contacto', [ContactoController::class, 'procesar']);*/