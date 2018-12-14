<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/admin', 'middleware' => ['tenancy.register', 'bindings', 'cors']], function () {

    Route::group(['prefix' => '/configuration', 'namespace' => 'Configuration'], function () {
        Route::get('companies/enum', 'CompaniesController@enum');
        Route::get('permissions/enum', 'PermissionsController@enum');
        Route::get('roles/enum', 'RolesController@enum');
        Route::get('subsidiaries/enum/{company}', 'SubsidiariesController@enum');
        Route::get('users/enum', 'UsersController@enum');

        Route::apiResources([
            'companies' => 'CompaniesController',
            'subsidiaries' => 'SubsidiariesController',
            'permissions' => 'PermissionsController',
            'roles' => 'RolesController',
            'users' => 'UsersController',
        ]);
    });

    Route::group(['prefix' => '/parametrizations', 'namespace' => 'Parametrizations'], function () {
        Route::get('routine-events/enum', 'RoutineEventsController@enum');
        Route::get('subsidiary-parameters/enum/{subsidiary}', 'SubsidiaryParametersController@enum');

        Route::apiResources([
            'routine-events' => 'RoutineEventsController',
            'subsidiary-parameters' => 'SubsidiaryParametersController',
        ]);
    });

    Route::group(['prefix' => '/registers', 'namespace' => 'Registers'], function () {
        Route::get('address-types/enum', 'AddressTypesController@enum');
        Route::get('cities/enum/{state}', 'CitiesController@enum');
        Route::get('countries/enum', 'CountriesController@enum');
        Route::get('entity-categories/enum', 'EntityCategoriesController@enum');
        Route::get('states/enum', 'StatesController@enum');

        Route::apiResources([
            'address-types' => 'AddressTypesController',
            'cities' => 'CitiesController',
            'countries' => 'CountriesController',
            'entity-categories' => 'EntityCategoriesController',
            'states' => 'StatesController',
        ]);
    });

});