<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [MainController::class, 'home']);

Route::resource('products',ProductsController::class);
/*
    GET /products - index
    POST /products - store
    GET /products/create - Fromulario para crear
    GET /products/:id - Mostrar un producto con ID
    GET /products/:id/edit - Fromulario para edición
    PUT O PATCH  /products/:id - Actualizar un producto
    DELETE  /products/:id - elimina un producto

*/
