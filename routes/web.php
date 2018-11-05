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

Route::get('/', function () {
    //return view('welcome');
    return 'Home';
});


Route::get('/usuarios', function () {
    return 'Usuarios';
});

Route::get('/usuarios/detalles', function() {
    //Ejemplo de URL: http://repaso-laravel.test/usuarios/detalles?id=10
    return 'Mostrando detalle del usuario: ' . $_GET['id'];
});


Route::get('/usuarios/{id}', function($id) {
    return "Mostrando detalle del usuario: $id";
})->where('id', '[0-9]+');  


Route::get('/usuarios/nuevo', function() {
    return 'Crear nuevo usuario';
});


Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null) {
    
    $name = ucfirst($name);

    if($nickname)
        return "Bievenido $name, tu apodo es: $nickname";
    else
        return "Bievenido $name";
    
});

