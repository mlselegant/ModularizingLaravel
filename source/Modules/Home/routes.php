<?php

Route::group(array('module'=>'Home','namespace' => 'App\Modules\Home\Controllers'), function() {

    Route::get('home/index', 'HomeController@index');
    Route::get('home/about', 'HomeController@about');

});