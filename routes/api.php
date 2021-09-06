<?php

Route::prefix('task')->group(function () {
    Route::get('/', 'TaskController@getAll');
    Route::get('/{id}', 'TaskController@getOne');
});