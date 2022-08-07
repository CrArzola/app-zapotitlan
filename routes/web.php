<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RecipesController;


use App\Http\Controllers\Auth\LoginController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"index"]);


#rutas para el apartado de login
Route::prefix('admin')->group(function () {
    Route::get('/', [LoginController::class,"show_login"])->middleware('guest')->name('index_login');

    Route::get('/dashboard', [AdminController::class,"dashboard"])->middleware('auth')->name('dashboard');
    Route::get('/reportes', [AdminController::class,"report_excel"])->middleware('auth')->name('report_excel');
   
     
    Route::post('/reportes/excelExport', [AdminController::class,"export_report_excel"])->middleware('auth')->name('report_excel_export');
    Route::get('/buscar_alumno', [AdminController::class,"buscar_alumno"])->middleware('auth')->name('buscar_alumno');
    Route::post('/reportes/exportHistory', [AdminController::class,"export_report_excel_alumno"])->middleware('auth')->name('report_excel_export_alumno');
    Route::post('/reportes/buscar_alumno_online', [AdminController::class,"buscar_alumno_online"])->middleware('auth')->name('buscar_alumno_online');
    Route::post('/positivos', [AdminController::class,"casosPositivos"])->name('positivos');
    Route::post('/sospechosos', [AdminController::class,"casosSospechosos"])->name('sospechosos');
    
    
    //products
    Route::get('/products', [AdminController::class,"products"])->middleware('auth')->name('products');
    Route::get('/products/add', [AdminController::class,"products_add"])->middleware('auth')->name('products_add');
    Route::post('/products/store', [ProductsController::class,"store"])->middleware('auth')->name('products_store');
    Route::delete('/products/destroy/{product}', [ProductsController::class,"destroy"])->middleware('auth')->name('products_delete');

    
    //recipes
    Route::get('/recipes', [AdminController::class,"recipes"])->middleware('auth')->name('recipes');
    Route::get('/recipes/add', [AdminController::class,"recipes_add"])->middleware('auth')->name('recipes_add');
    Route::post('/recipes/store', [RecipesController::class,"store"])->middleware('auth')->name('recipes_store');
    Route::delete('/recipes/destroy/{recipes}', [RecipesController::class,"destroy"])->middleware('auth')->name('recipes_delete');

    ///login y logout
    Route::post('/login', [LoginController::class,"login"])->name('login');
    Route::post('/logout', [LoginController::class,"logout"])->name('logout');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');