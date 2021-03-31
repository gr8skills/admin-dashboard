<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Site settings
    Route::apiResource('sitesettings', 'SiteSettingsApiController');

    //main-menu
    Route::apiResource('main-menu', 'MainMenuController');

    //Sliders
    Route::apiResource('sliders', 'SliderController');

    //CMS Index
    Route::apiResource('index-cms', 'CMSIndexController');

    //CMS Principal's welcome
    Route::apiResource('about-us-principals-welcome', 'CMSAboutUsLeadershipController');

    //CMS History
    Route::apiResource('about-us-history', 'CMSAboutUsHistoryController');

    //CMS Our Vision and Mission
    Route::apiResource('about-us-mission-vision', 'CMSAboutUsMissionVisionController');

    //CMS Leadership
    Route::apiResource('about-us-leadership', 'CMSAboutUsRealLeadershipController');

    //Admission
    Route::apiResource('admission', 'AdmissionController');

    //Emis
    Route::apiResource('emis', 'EMISController');

    //About Us
    Route::apiResource('aboutus', 'AboutUsController');

    //Learning
    Route::apiResource('learning', 'LearningController');

    //Pre School
    Route::apiResource('preschool', 'PreSchoolController');

    //Elementary School
    Route::apiResource('elementaryschool', 'ElementarySchoolController');

    //Middle School
    Route::apiResource('middleschool', 'MiddleSchoolController');

    //High School
    Route::apiResource('highschool', 'HighSchoolController');

    //Innovation Initaitive
    Route::apiResource('innovation', 'InnovationController');

    //Student Life
    Route::apiResource('studentlife', 'StudentLifeController');

});
