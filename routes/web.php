<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');



//Resource Facturacion
Route::resource('Facturacion', 'Facturacion\FacturacionController');





//Catalogo
Route::group(['prefix' => 'Catalogo','middleware' => 'auth'], function () {

   //Resource Aseguradora
   Route::resource('Aseguradora', 'Catalogo\AseguradoraController');


   //Usuarios
   Route::group(['prefix' => 'Usuarios','middleware' => 'auth'], function () {
   	  //Resource GestionDeUsuarios
      Route::resource('GestionDeUsuarios', 'Catalogo\Usuarios\UsuariosController');
      //Resource GestionDeRolesUsuarios
      Route::resource('GestionDeRoles', 'Catalogo\Usuarios\RolesController');

      Route::get('/permisos','Catalogo\Usuarios\PermisosController@index');
      Route::get('/permisos/asignar','Catalogo\Usuarios\PermisosController@asignar');
      Route::get('/permisos/desasignar','Catalogo\Usuarios\PermisosController@desasignar');

   });//FIN Usuarios





});//FIN Catalogo






// Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
// Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));
