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

    //Innovation Initaitive
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('innovation', 'InnovationController');

    //Student Life
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('studentlife', 'StudentLifeController');

    //Child Protection
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('childprotection', 'ChildProtectionController');

    //Contact Us
    //Route::delete('index/destroy', 'SliderController@massDestroy')->name('index.massDestroy');
    Route::resource('contactus', 'ContactUsController');

    //Principal Day
    Route::resource('principal-day', 'PrincipalDaySchoolController');

    //Image Gallery
    Route::delete('gallery/destroy', 'ImageGalleryController@massDestroy')->name('gallery.massDestroy');
    Route::resource('gallery', 'ImageGalleryController');

    //Alumni Set
    Route::delete('alumni-set/destroy', 'AlumniSetController@massDestroy')->name('alumni-set.massDestroy');
    Route::resource('alumni-set', 'AlumniSetController');

    //Alumni
    Route::delete('alumni/destroy', 'AlumniController@massDestroy')->name('alumni.massDestroy');
    Route::resource('alumni', 'AlumniController');

    //Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('event.massDestroy');
    Route::resource('events', 'EventsController');

    //FAQs
    Route::delete('faq/destroy', 'FrequentlyAskedQuestionController@massDestroy')->name('faq.massDestroy');
    Route::resource('faq', 'FrequentlyAskedQuestionController');

    //Career
    Route::delete('career/destroy', 'CareerController@massDestroy')->name('career.massDestroy');
    Route::resource('career', 'CareerController');

    Route::resource('careerfixed', 'CareerFixedController');


});

Route::group(['prefix' => 'frontend', 'as' => 'frontend.', 'namespace' => 'FrontEnd'], function () {
    Route::get('/index', 'FrontEndController@index');
});
