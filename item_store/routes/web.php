<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Itemcontroller;


Route::get('/', function () 

{
    return view('welcome');
});


Route::post('insert_item', [Itemcontroller::class , 'insert']);

Route::get('/' , [Itemcontroller::class , 'read']);

Route::get('updatedelete' , [Itemcontroller::class , 'updateordelete']);

Route::get('update',[Itemcontroller::class , 'update']);


