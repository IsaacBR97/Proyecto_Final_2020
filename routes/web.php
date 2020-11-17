<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//FUNCIONES DE SUPERVISOR O GERENTE EN ESTE CASO
//Funciones dentro del botón categorías
Route::resource('Category', 'CategoriesController'::class);

//Funciones dentro del botón Usuarios registrados
Route::resource('User', 'UsersController'::class);

//Funciones dentro del botón Vendedores
Route::resource('Seller', 'SellersController'::class);


Route::get('supervisor/tablero', function() {
    return view('supervisor.tablero'); 
    //buscara el archivo 'tablero.php' o 'tablero.blade.php' dentro de resoureces/views/supervisor
});


/////////////////////////////////Rutas agregada por kike///////////////////////////////////////////
//carpeta vendedor/productos
//Route::resource('productos',productosController::class);
//Route::get('editar', 'productosController@edit'); //solo es temporal 
/////////////////////////////////////////////////////////////////////////////////////////////



//Route::post('validar','AutenticarController@validar');
//Route::resource('/welcome','WelcomeController');


//////////////////////////////////////////////////Antiguas rutas////////////////////////////////////////////////////



//Route::get('supervisor/categories', 'Categories@all')->name('Categorias');
/*Route::get('supervisor/categories/create', 'CategoriesController@create');
//---> Ruta a utilizar con base de datos: Route::Post('supervisor/categories', 'CategoriesController@store');
Route::get('supervisor/categories/edit', 'CategoriesController@edit');
Route::get('supervisor/categories/show', 'CategoriesController@show');


Route::get('supervisor/users', 'UsersController@index');
Route::get('supervisor/users/update', 'UsersController@update');
//---> Ruta a utilizar con base de datos: Route::Post('supervisor/users', 'UsersController@store');


Route::get('supervisor/sellers', 'SellersController@index');*/
