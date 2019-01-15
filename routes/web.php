<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/getAll', 'PruebaDatabasesController@getAll');
Route::get('/getAll1', 'PruebaDatabasesController@getAll1');
Route::get('/getAll2', 'PruebaDatabasesController@getAll2');

Route::post('/create1', 'PruebaDatabasesController@createUser1');
Route::post('/create2', 'PruebaDatabasesController@createUser2');
