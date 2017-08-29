<?php

// // Route::namespace('Frontend')->group(function () {
//     Route::get('page', 'BiNet\Pages\Http\Controllers\Frontend\PageController@show');
// // });
// // 
Route::group(['namespace' => 'BiNet\Pages\Http\Controllers\Frontend'], function() {
    Route::get('page', 'PageController@show');
});

