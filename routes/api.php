<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
});

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('jobs', 'JobsController', ['except' => ['create', 'edit']]);
    Route::get('/categories', 'JobsController@getJobcategories');
    Route::post('/createEmployee', 'RegisterController@createEmployee');
    
    
});