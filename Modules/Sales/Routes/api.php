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

Route::group(['prefix' => '/sales', 'middleware' => ['tenancy.register', 'bindings', 'cors']], function () {

    Route::get('entities/enum', 'EntitiesController@enum');
    Route::get('entity-addresses/enum/{entity}', 'EntityAddressesController@enum');
    Route::get('orders/enum', 'OrdersController@enum');
    Route::get('price-tables/enum', 'PriceTablesController@enum');
    Route::get('sales-groups/enum', 'SalesGroupsController@enum');
    Route::get('sales-group-sellers/enum', 'SalesGroupSellersController@enum');
    Route::get('sales-group-sellers/comission-percent/{salesGroupSeller}', 'SalesGroupSellersController@getComissionPercent');

    Route::apiResources([
        'entities' => 'EntitiesController',
        'entity-addresses' => 'EntityAddressesController',
        'orders' => 'OrdersController',
        'price-tables' => 'PriceTablesController',
        'sales-groups' => 'SalesGroupsController',
        'sales-group-sellers' => 'SalesGroupSellersController',
    ]);
});