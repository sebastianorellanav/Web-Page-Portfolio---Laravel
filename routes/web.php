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



Route::get('/','Principal@index');

Route::get('/aboutMe', function () {
    return view('infoYContacto.sobreMi');
});

Route::get('/contacto', function () {
    return view('infoYContacto.contacto');
});
Route::post('/contactar', 'Principal@contact')->name('contact');
//Ruta que esta señalando nuestro formulario

Route::get('/search','Principal@index');


//Colecciones

Route::get('/colecciones/administrar','ColeccionController@administrarColecciones');
Route::resource('/colecciones','ColeccionController');

//fotografias

Route::get('/fotografias/administrar','FotografiaController@administrarFotografias');
Route::post('/fotografias/upload','FotografiaController@upload');
Route::resource('/fotografias','FotografiaController');
Route::post('fotografias/guardar/{id}','FotografiaController@userPhotoLikedController');


//Etiquetas
Route::resource('/etiquetas','EtiquetaController');

//usuarios

Route::get('/usuarios','UsuarioController@index');
Route::get('/usuarios/show/{id}','UsuarioController@show');
Route::post('/usuarios/destroy/{id}','UsuarioController@destroy');
Route::post('/usuarios/store','UsuarioController@store');
Route::post('/usuarios/update/{id}','UsuarioController@update');
Route::get('/usuarios/create','UsuarioController@create');

//valoraciones

Route::get('/valoraciones','ValoracionController@index');
Route::get('/valoraciones/show/{id}','ValoracionController@show');
Route::post('/valoraciones/destroy/{id}','ValoracionController@destroy');
Route::post('/valoraciones/store','ValoracionController@store');
Route::post('/valoraciones/update/{id}','ValoracionController@update');
Route::get('/valoraciones/create','ValoracionController@create');

//permisos

Route::get('/permisos','PermisoController@index');
Route::get('/permisos/show/{id}','PermisoController@show');
Route::post('/permisos/destroy/{id}','PermisoController@destroy');
Route::post('/permisos/store','PermisoController@store');
Route::post('/permisos/update/{id}','PermisoController@update');
Route::get('/permisos/create','PermisoController@create');

//roles

Route::get('/roles','RolController@index');
Route::get('/roles/show/{id}','RolController@show');
Route::post('/roles/destroy/{id}','RolController@destroy');
Route::post('/roles/store','RolController@store');
Route::post('/roles/update/{id}','RolController@update');
Route::get('/roles/create','RolController@create');

Auth::routes();

/*
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/edit/{id}', 'HomeController@edit');
Route::post('/home/update/{id}', 'HomeController@update');
*/
Route::resource('/home','HomeController');



