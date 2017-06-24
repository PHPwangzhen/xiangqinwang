<?php

Route::group(array('namespace' => 'Intranet', 'prefix' => 'intranet'), function () {
    Route::any('login', 'SystemController@login');
    Route::group(array('middleware' => 'intranet.logincheck'), function () {
        Route::get('/', 'SystemController@home');
        Route::get('/logout', 'SystemController@actionLogout');
        Route::get('/Privilege/list', 'PrivilegeController@actionList');
        Route::any('/Privilege/add', 'PrivilegeController@actionAdd');
    });
});