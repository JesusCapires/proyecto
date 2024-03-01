<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QualityController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/customers', [CustomerController::class, 'index'])->name('listaCliente');
Route::post('/customers', [CustomerController::class, 'createOrUpdate'])->name('crearEditarCliente');

Route::get('/products', [ProductController::class, 'index'])->name('listaProducto');
Route::post('/products', [ProductController::class, 'createOrUpdate'])->name('crearEditarProducto');

Route::get('/qualitys', [QualityController::class, 'index'])->name('listaCalidad');
Route::post('/qualitys', [QualityController::class, 'createOrUpdate'])->name('crearEditarCalidad');



Route::get('/', function () {
    return view('authentication.signIn');
})->name('login');

Route::get('/register', function () {
    return view('authentication.signUp');
})->name('register');


// Route::get('/customers', function () {
//     return view('customers');
// })->name('customers');

Route::get('/dashq', function () {
    return view('dash-qualtum');
})->name('dashq');

// Route::get('/products', function () {
//     return view('products');
// })->name('products');

Route::get('/requests', function () {
    return view('requests');
})->name('requests');

Route::get('/requestsp', function () {
    return view('requests_');
})->name('requests_');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/weblogs', function () {
    return view('weblogs');
})->name('weblogs');

// Route::get('/qconcerns', function () {
//     return view('quality-concern');
// })->name('qconcerns');
