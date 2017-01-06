<?php

Route::get('/' , [
    'uses' => 'HomeController@home',
    'as'   =>  'home'
]);

Auth::routes();
