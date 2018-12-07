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

    Route::group(['prefix' => '/registers'], function () {
        Route::get('address-types/enum', 'AddressTypesController@enum');
        Route::get('cities/enum/{state}', 'CitiesController@enum');
        Route::get('companies/enum', 'CompaniesController@enum');
        Route::get('countries/enum', 'CountriesController@enum');
        Route::get('entity-categories/enum', 'EntityCategoriesController@enum');
        Route::get('states/enum', 'StatesController@enum');
        Route::get('subsidiary-parameters/enum/{subsidiary}', 'SubsidiaryParametersController@enum');

        Route::apiResources([
            'address-types' => 'AddressTypesController',
            'cities' => 'CitiesController',
            'companies' => 'CompaniesController',
            'countries' => 'CountriesController',
            'entity-categories' => 'EntityCategoriesController',
            'states' => 'StatesController',
            'subsidiaries' => 'SubsidiariesController',
            'subsidiary-parameters' => 'SubsidiaryParametersController',
        ]);
    });
});