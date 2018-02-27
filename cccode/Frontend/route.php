<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/27/2018
 * Time: 9:47 AM
 */
use Frontend\Models\Category;
Route::get('/',function (){
  $data =    Category::all();
  dd($data);
});

//Route::get('/test','HomeController.php@homepage');

Route::group(['namespace' => 'Frontend\Controllers', 'prefix' => '/', 'middleware' => ['web'] ], function () {
    Route::get('/test','HomeController@homepage');
});