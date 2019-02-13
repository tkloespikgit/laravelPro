<?php

Route::any("login", "Admin\AuthController@login");
Route::group(["middleware"=>["AdminAuth"]],function (){
    Route::get("index", "Admin\IndexController@index")->name("adminPortal");



    Route::get("auth/administrators/manage","Admin\AuthController@administratorsManage");
    Route::any("auth/permissions/manage","Admin\AuthController@permissionsManage");


    Route::get("system/phpinfo","Admin\SystemController@phpinfo");
    Route::get("system/language/manage","Admin\SystemController@languageManage");
});
