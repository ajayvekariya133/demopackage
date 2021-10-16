<?php

use Illuminate\Support\Facades\Route;

// Route::get('demoav', function(){
// 	echo 'Hello from the demoav package!';
// });

Route::get('demoav', 'Bytefum\Demoav\Controllers\DemoavController@index')->name('list-user');
Route::get('list-add', 'Bytefum\Demoav\Controllers\DemoavController@addList')->name('list-add');
Route::post('add-user', 'Bytefum\Demoav\Controllers\DemoavController@create')->name('add-user');
Route::get('list-edit/{id}', 'Bytefum\Demoav\Controllers\DemoavController@view')->name('list-edit');
Route::post('edit-user/{id}', 'Bytefum\Demoav\Controllers\DemoavController@update')->name('edit-user');
Route::delete('list-delete/{id}', 'Bytefum\Demoav\Controllers\DemoavController@deteleData')->name('list-delete');