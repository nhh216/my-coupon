<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/27/2018
 * Time: 9:47 AM
 */

Route::group(['namespace' => 'Frontend\Controllers', 'prefix' => '/', 'middleware' => ['web'] ], function () {
    Route::get('/','HomeController@home');

    Route::get('/store/{name}-{id}',[
        'as'=>'stores',
        'uses'=>'HomeController@showCouponsByStore'
    ]);

    Route::get('/coupon-single.html',[
        'as'=>'single_coupon',
        'uses'=>'HomeController@Single_coupon'
    ]);

    Route::get('/autocomplete',[
        'as'=>'autocomplete',
        'uses'=>'HomeController@autocomplete'
    ]);

    Route::get('/d','HomeController@d');

});