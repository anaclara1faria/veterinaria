<?php

use App\Http\Controllers\RecursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/relat',[ReportController::class, 'relat'])->name('report.create');
Route::post('/relat',[ReportController::class, 'store']);

Route::get ('/lista', function() {
    return view('clinica-veterinaria');
});

Route::get ('/registro', function() {
    return view('registros');
});

Route::get('/edit/{id}', [RecursoController::class, 'atualizarInfo']);

Route::get('/form', [RecursoController::class, 'form'])->name('form.create');
Route::post('/form', [RecursoController::class, 'store']);
   Route::get('/', [HomeController::class, 'index']);

Route::get('/registers/create', [RegisterController::class, 'create']);
Route::post('/registers/create', [RegisterController::class, 'store']);

