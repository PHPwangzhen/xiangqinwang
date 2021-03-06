<?php
Route::group(array('namespace' => 'Frontend'), function () {

    Route::any('/', 'UserController@authenticationRegisterEmail');
    Route::any('login', 'UserController@actionLogin');
    Route::any('logout', 'UserController@actionLogout');
    Route::get('register_step_one', 'UserController@prepareRegister');
    Route::group(array('prefix' => 'User'), function () {
        Route::post('checkExists', 'UserController@checkUserExists');
        Route::post('storeRegisterInfo', 'UserController@actionStoreRegisterInfo');
        Route::get('registerMemberAvatar', 'UserController@actionRegisterMemberAvatar');
        Route::post('storeMemberRegisterAvatar', 'UserController@actionStoreMemberRegisterAvatar');
        Route::post('uploadMemberAvatar', 'UserController@actionUploadMemberAvatar');
        Route::get('activationAccount', 'UserController@actionActivationAccount');
        Route::group(['prefix' => 'Supports'], function () {
            Route::get('activationEmail', 'UserController@actionActivationEmail');
        });
    });

    // 登录后的用户
    Route::group(['middleware' => 'frontend.member_login_check'], function () {
        Route::get('home', 'MemberRecommendController@actionHome');
        Route::get('myAccount', 'MemberController@myAccount');
        Route::group(array('prefix' => 'User'), function () {
            Route::group(['prefix' => 'Upload'], function () {
                Route::post('TrendsAttachedImage', 'MemberRecommendController@uploadTrendsAttachedImage');
            });
            Route::group(['prefix' => 'Remove'], function () {
                Route::post('TrendsAttachedFile', 'MemberRecommendController@removeTrendsAttachedImage');
            });
            Route::post('publishTrends', 'MemberRecommendController@publishTrends');
        });
        Route::group(array('prefix' => 'setting'), function () {
            Route::get('face', 'SettingController@avatarEdit');
            Route::post('face/upload', 'SettingController@uploadAvatar');
            Route::post('face/updateRequest', 'SettingController@updateUserAvatar');
        });
    });

    Route::group(array('middleware' => 'LoginCheck'), function () {

    });
    Route::group(array('prefix' => 'home'), function () {
        //        Route::any('/login', function () {
        //            echo 'aaa';
        //        });
    });

});