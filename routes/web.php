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


/* Esta ruta no indica el usuario al que se le quiere mostrar los detalles
 * Se debe utilizar la variable globar GET o POST
 */
Route::get('/usuarios/detalles', function() {
    //Ejemplo de URL: http://repaso-laravel.test/usuarios/detalles?id=10
    return 'Mostrando detalle del usuario: ' . $_GET['id'];
});


/* Esta ruta es una modificación de la anterior
 * Pero se utiliza un parámetro dinámico dentro de la ruta.
 */
Route::get('/usuarios/{id}', function($id) {
    /*return Mostrando detalle del usuario: ' . $id; Es más fácil imprimirlo como abajo,
    pero se debe usar comillas dobles
    Aunque también para mejorar la legibilidad del código se puede hacer 
    return "Mostrando detalle del usuario: {$id}";*/
    return "Mostrando detalle del usuario: $id";
})->where('id', '[0-9]+');  /* Este filtro valida que el parámetro dinámico (No el argumento de la función)
                             * id sea un entero, se hace a través de una expresión regular
                             * Una manera más fácil para los dígitos es \d+
                             * Y para cadenas de caracteres \w+
                             * */


/* Ruta para crear un nuevo usuario
 * Laravel compara las rutas en orden, por ende esta ruta nunca entraría aquí sino en la de arriba 'usuarios/{id}'
 * Ahora funciona porque la de arriba se colocó la restricción que el parámetro dinámico sea un entero.
 * Una forma fácil de solucionar sería simplemente mover este bloque de código antes que la ruta de arriba
 */
Route::get('/usuarios/nuevo', function() {
    return 'Crear nuevo usuario';
});


/* Laravel soporte más de un parámetro dinámico a la vez
 */
Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null) {
    /* En este ejemplo, el parámetro nickname es opcional, por eso se coloca ?
     * Y por ende en el argumento de la función anónima se le da un valor por defecto, en este caso null.
     * Algo muy importante es que el nombre del parámetro no es obligado que coincida con el nombre puesto
     * en el argumento, es decir, el parámetro puede ser {name} y en el argumento $nombre lo que realmente
     * importa es el orden.
     */

    if($nickname)
        return "Bievenido $name, tu apodo es: $nickname.";
    else
        return "Bievenido $name, no tienes apodo.";
    
});

