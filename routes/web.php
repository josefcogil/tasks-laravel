<?php

Route::get('/', 'TaskController@index');

Route::prefix('task')->group(function () {
    Route::get('/', 'TaskController@getAll');
    Route::get('/{id}', 'TaskController@getOne');
});