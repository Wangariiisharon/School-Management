<?php

Route::get('/',"StudentController@index");
Route::get('/create',"StudentController@create");
Route::get('/edit/{id}',"StudentController@edit");
Route::get('/show/{id}',"StudentController@show");
Route::post('/store',"StudentController@store"); 
Route::post('/update/{id}',"StudentController@update"); 






