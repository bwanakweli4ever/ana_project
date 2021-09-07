<?php

use Illuminate\Support\Facades\Route;


Route::resource('trees', 'TreeController');


Route::resource('schools', 'SchoolController');



Route::resource('assignTrees', 'AssignTreesController');


Route::get('report','AssignTreesController@report');