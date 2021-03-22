<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'SiteSettingsController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // SiteSettings
    Route::delete('settings/destroy', 'SiteSettingsController@massDestroy')->name('settings.massDestroy');
    Route::resource('sitesettings', 'SiteSettingsController');

    //MainMenu
    Route::delete('menus/destroy', 'MainMenuController@massDestroy')->name('menus.massDestroy');
    Route::resource('mainMenu', 'MainMenuController');

    //Sliders
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::resource('sliders', 'SliderController');

    //CMS Index
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('indexCMS', 'CMSIndexController');

    //CMS Index
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('aboutUsLeadership', 'CMSAboutUsLeadershipController');

});
