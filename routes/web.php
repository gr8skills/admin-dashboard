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
    Route::resource('main-menu', 'MainMenuController');

    //Sliders
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::resource('sliders', 'SliderController');

    //CMS Index
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('index-cms', 'CMSIndexController');

    //CMS Principal's welcome
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('about-us-principals-welcome', 'CMSAboutUsLeadershipController');

    //CMS History
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('about-us-history', 'CMSAboutUsHistoryController');

    //CMS Our Vision and Mission
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('about-us-mission-vision', 'CMSAboutUsMissionVisionController');

    //CMS Leadership
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('about-us-leadership', 'CMSAboutUsRealLeadershipController');

    //Admission
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('admission', 'AdmissionController');

    //Emis
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('emis', 'EMISController');

    //About Us
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('aboutus', 'AboutUsController');

    //Learning
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('learning', 'LearningController');

    //Pre School
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('preschool', 'PreSchoolController');

    //Elementary School
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('elementaryschool', 'ElementarySchoolController');

    //Middle School
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('middleschool', 'MiddleSchoolController');

    //High School
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('highschool', 'HighSchoolController');


});
