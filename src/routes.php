<?php

use Illuminate\Support\Facades\Route;

// Route::get('demoav', function(){
// 	echo 'Hello from the demoav package!';
// });

Route::get('demoav', 'Bytefum\Demoav\DemoavController@index');