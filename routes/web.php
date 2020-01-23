<?php

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

Route::get('/', 'PageController@inicio')->name('inicio');
//Para rutas de raiz es mejor añadir un detalle para que no interfiera
//Con las demás rutas creadas.
Route::get('/detalle/{id}', 'PageController@detalle')->name('notas.detalle');

//Puede ser la ruta raiz porque no interfiere en los get, ya que esta es post
Route::post('/', 'PageController@crear')->name('notas.crear');

Route::get('/editar/{id}', 'PageController@editar')->name('notas.editar');

Route::put('/editar/{id}','PageController@update')->name('notas.update');

Route::delete('eliminar/{id}', 'PageController@eliminar')->name('notas.eliminar');

Route::get('fotos', 'PageController@fotos')->name('foto');

Route::get('blog', 'PageController@noticias')->name('noticias');

Route::get('nosotros/{nombre?}', 'PageController@nosotros')->name('nosotros');