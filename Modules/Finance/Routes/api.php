<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'finance', 'middleware' => ['tenancy.register', 'bindings', 'cors']], function () {

    Route::get('business-units/enum', 'BusinessUnitsController@enum');
    Route::get('finance-natures/enum', 'FinanceNaturesController@enum');
    Route::get('cost-centers/enum', 'CostCentersController@enum');
    Route::get('payment-means/enum', 'PaymentMeansController@enum');
    Route::get('payment-rules/enum', 'PaymentRulesController@enum');

    Route::apiResources([
        'finance-natures' => 'FinanceNaturesController',
        'business-units' => 'BusinessUnitsController',
        'cost-centers' => 'CostCentersController',
        'payment-means' => 'PaymentMeansController',
        'payment-rules' => 'PaymentRulesController',
    ]);
});