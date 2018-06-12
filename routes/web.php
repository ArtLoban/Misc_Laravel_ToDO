<?php

//Route::get('tasks', 'TasksController@index')->name('tasks.index');
//
//Route::get('tasks/create', 'TasksController@create')->name('tasks.create');
//
//Route::post('tasks/store', 'TasksController@store')->name('tasks.store');
//
//Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');
//
//Route::put('tasks/{id}/update', 'TasksController@update')->name('tasks.update');
//
//Route::get('tasks/{id}/show', 'TasksController@show')->name('tasks.show');
//
//Route::delete('tasks/{id}/destroy', 'TasksController@destroy')->name('tasks.destroy');

Route::resource('tasks', 'TasksController');

Route::get('/', 'InfoController@index')->name('index');

Route::get('about', 'InfoController@about')->name('about');

Route::get('contact', 'InfoController@contact')->name('contact');



