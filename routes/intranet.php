<?php

Route::group(array('namespace' => 'Intranet', 'prefix' => 'intranet'), function () {
    Route::any('login', 'SystemController@login');
    Route::group(array('middleware' => array('intranet.logincheck', 'intranet.useranalyzetool')), function () {
        Route::get('/', 'SystemController@home');
        Route::get('logout', 'SystemController@actionLogout');
        Route::get('Privilege/list', 'PrivilegeController@actionList');
        Route::any('Privilege/add', 'PrivilegeController@actionAdd');
        Route::any('Privilege/edit/{permissionId?}', 'PrivilegeController@actionEdit');
        Route::any('Privilege/delete/{permissionId?}', 'PrivilegeController@actionDelete');
        // 管理员管理
        Route::get('AdminUserManage/list', 'AdminController@actionList');
        Route::any('AdminUserManage/add', 'AdminController@actionAdd');
        Route::any('AdminUserManage/edit/{userid?}', 'AdminController@actionEdit');
        // 角色管理
        Route::get('RoleManage/list', 'RoleController@actionList');
        Route::any('RoleManage/add', 'RoleController@actionAdd');
        Route::any('RoleManage/edit/{roleId?}', 'RoleController@actionEdit');
        Route::any('RoleManage/delete/{roleId?}', 'RoleController@actionDelete');
    });
});