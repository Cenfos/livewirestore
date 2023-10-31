<?php

use Illuminate\Support\Facades\Route;
// Rutas públicas
Route::get('/', function () {
    return view('welcome');
})->name('welcome');



Route::group(['middleware' => ['auth:sanctum', 'verified'],'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});
//  CRUDs
Route::group(['prefix'=>'category'], function(){
    Route::get('/', App\Livewire\Dashboard\Category\Index::class)->name('d-category-index'); //listado
    Route::get('/create', App\Livewire\Dashboard\Category\Save::class)->name('d-category-create'); //crear
    Route::post('/edit/{id}', App\Livewire\Dashboard\Category\Save::class)->name('d-category-edit'); //editar
});
Route::group(['prefix'=>'tag'], function(){
    Route::get('/', App\Livewire\Dashboard\Tag\Index::class)->name('d-tag-index'); //listado
    Route::get('/create', App\Livewire\Dashboard\Tag\Save::class)->name('d-tag-create'); //crear
    Route::post('/edit/{id}', App\Livewire\Dashboard\Tag\Save::class)->name('d-tag-edit'); //editar
});
Route::group(['prefix'=>'post'], function(){
    Route::get('/', App\Livewire\Dashboard\Post\Index::class)->name('d-post-index'); //listado
    Route::get('/create', App\Livewire\Dashboard\Post\Save::class)->name('d-post-create'); //crear
    Route::post('/edit/{id}', App\Livewire\Dashboard\Post\Save::class)->name('d-post-edit'); //editar  
});
