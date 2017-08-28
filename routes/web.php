<?php

Route::namespace('Frontend')->group(function () {
    Route::get('page', 'PageController@index');
});


