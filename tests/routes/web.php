<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPlantilla;
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
Route::get('/', [ControladorPlantilla::class, 'ctrTraerPlantilla']);


Route::get('/preescolar', function () {
    return view('preescolar');
});

Route::get('/primaria', function () {
    return view('primaria');
});

Route::get('/secundaria', function () {
    return view('secundaria');
});

Route::get('/preparatoria', function () {
    return view('preparatoria');
});

Route::get('/licenciaturas/cienciasdelaeducacion', function () {
    return view('cienciasdelaeducacion');
});

Route::get('/licenciaturas/cosmetologia', function () {
    return view('cosmetologia');
});

Route::get('/licenciaturas/educacionnormalprimaria', function () {
    return view('educacionnormalprimaria');
});

Route::get('/licenciaturas/educacionnormalpreescolar', function () {
    return view('educacionnormalpreescolar');
});

Route::get('/licenciaturas/criminologia', function () {
    return view('criminologia');
});

Route::get('/licenciaturas/gastronomia', function () {
    return view('gastronomia');
});

Route::get('/licenciaturas/mdce', function () {
    return view('mdce');
});

Route::get('/licenciaturas/nutricion', function () {
    return view('nutricion');
});

Route::get('/licenciaturas/psicologia', function () {
    return view('psicologia');
});

Route::get('/licenciaturas/psicopedagogia', function () {
    return view('psicopedagogia');
});

Route::get('/licenciaturas/trabajosocial', function () {
    return view('trabajosocial');
});


