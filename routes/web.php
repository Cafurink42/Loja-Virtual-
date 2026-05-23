<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiBrasilController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome', ['nome' => 'Carlos']);
});


Route::get ('/contato', function(){
    return 'meus contatos';
});


Route::post('/products/new', [ProductsController::class,'store']);
Route::post('/products/update/', [ProductsController::class, 'update']);
Route::get('/products/new', [ProductsController::class, 'create']);
Route::get('/products', [ProductsController::class,'index']);
Route::get('/products/update/{id}', [ProductsController::class, 'edit']);
Route::get('/products/delete/{id}', [ProductsController::class, 'destroy']);





