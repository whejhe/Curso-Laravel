<!-- web.php -->
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    // return "Hemos llegado a la pagina principal";
});

Route::get('/foro', function () {
    return view('Esta es la pagina del Foro');
});

Route::get('/contacto', function () {
    return view('Esta es la pagina de Contactos');
});

Route::get('/sobrenosotros', function () {
    return view('Esta es la pagina de About');
});

Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return view('Este es el post nº '.$id . ' creado por ' . $nombre);
}) ->where('nombre', '[A-Za-z]+');
