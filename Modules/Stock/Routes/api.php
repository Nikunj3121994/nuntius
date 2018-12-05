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

Route::group(['prefix' => '/stock', 'middleware' => ['tenancy.register', 'bindings', 'cors']], function () {

    Route::get('measurement-units/enum', 'MeasurementUnitsController@enum');
    Route::get('product-batches/enum/{product}', 'ProductBatchesController@enum');
    Route::get('product-categories/enum', 'ProductCategoriesController@enum');
    Route::get('product-groups/enum', 'ProductGroupsController@enum');
    Route::get('products/enum', 'ProductsController@enum');
    Route::get('product-types/enum', 'ProductTypesController@enum');
    Route::get('warehouses/enum', 'WarehousesController@enum');
    Route::get('warehouse-types/enum', 'WarehouseTypesController@enum');

    Route::apiResources([
        'measurement-units' => 'MeasurementUnitsController',
        'product-batches' => 'ProductBatchesController',
        'product-categories' => 'ProductCategoriesController',
        'product-groups' => 'ProductGroupsController',
        'products' => 'ProductsController',
        'product-types' => 'ProductTypesController',
        'warehouses' => 'WarehousesController',
        'warehouse-types' => 'WarehouseTypesController',
    ]);
});