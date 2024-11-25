<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosControler;

Route::get('/', [todosControler::class,'index'])->name('todo.home');

Route::get('/create', function () {
    return view('layouts.create');
})->name('new.todo');
// edit todo route
Route::get('/update/{id}', [todosControler::class,'edit'])->name('todo.edit');



//delete todo route
Route::get('/delete/{id}', [todosControler::class,'delete'])->name('todo.delete');

// create todo route
Route::post('/create', [todosControler::class,'store'])->name('store');

// update todo route
Route::post('/update', [todosControler::class,'updateData'])->name('todo.updateData');