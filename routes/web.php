<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/associados', [Controller::class, 'associados']);
Route::get('/formulario-usuario', [Controller::class, 'formulario_usuario']);
Route::get('/formulario-livro', [Controller::class, 'formulario_livro']);
Route::get('/livros', [Controller::class, 'livros'])->name('livros');
Route::post('/post-usuario', [Controller::class, 'cadastrar_usuario']);
Route::post('/post-livro', [Controller::class, 'cadastrar_livro']);
//Route::post('/cadastro', 'Controller@stores');

//Route::get('/', [Controller::class, 'home']);

Auth::routes();

Route::get('/home', [Controller::class, 'livros'])->name('home');

Route::get('/limpar_nome/{id}', [Controller::class, 'limpar_nome'])->name('limpar');
