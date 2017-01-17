<?php

Route::get('/home' , function (){
   return 'home';
});

/**
 * Search
 */

Route::get('/search' , [
   'uses' => 'SearchController@getResults',
    'as'  => 'search.results'
]);

/**
 * User profile
 */

Route::resource('users' , 'UserController' , [
    'only' => ['show' , 'edit' , 'update']
]);

/**
 * Friends
 */

Route::resource('friends' , 'FriendController' , [
    'only' => ['index']
]);