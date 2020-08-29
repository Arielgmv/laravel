<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    echo "<h1>Hola Mundo</h1>";
});

Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'
    ]);

Route::get('/redirigir', 'PeliculaController@redirigir');

Route::get('/formulario', 'PeliculaController@formulario');

Route::post('/recibir', 'PeliculaController@recibir');

Route::resource('usuario', 'UsuarioController');

//Rutas de fruta
Route::group(['prefix' => 'frutas'], function () {
    Route::get('index', 'FrutaController@index');
});

/*

 * GET: Conseguir datos
 * POST: Guardar datos
 * PUT: Actualizar recursos
 * DELETE: Eliminar recursos
 *
 *  */
/*
Route::get('/mostrar-fecha', function() {
    $titulo = "Estoy mostrando la fecha 1";
    $test = "Prueba de test";
    return view('mostrar-fecha', array(
        'titulo' => $titulo, //'titulo' es nombre de indice, le paso como valor, el valor que tiene $titulo
        'test' => $test
    ));
});

Route::get('/pelicula/{titulo?}', function($titulo='No hay una pelicula seleccionada') {
    return view ('pelicula', array(
       'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{parte}', function($titulo, $parte) {
    return view ('pelicula_parte', array(
        'titulo' => $titulo,
        'parte' => $parte
    ));
});
*/
/*Route::get('/futbol/{equipos}', function ($equipos){
    return view ('futbol', array(
        'equipos' => $equipos
    ));
});*/
/*
Route::get('/futbol/{equipos}/{year?}', function ($equipos, $year=2020){
    //$equipos = "The Strongest";
    return view('futbol', array(
        'equipos' => $equipos,
        'year' => $year
    ));
})->where(array(
    'equipos' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));
*/
/*
Route::get('/listado-peliculas', function (){
    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Spiderman', 'Gran Torino', 'Lord of the rings', 'Jocker');
    $director = "director Skinner";*/
    /*return view('peliculas.listado', array (
        'titulo' => $titulo
    ));*/
    /*return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado)
            ->with('director', $director);
});*/

/*
Route::get('/pagina-generica', function () {
    return view('pagina');
});*/
