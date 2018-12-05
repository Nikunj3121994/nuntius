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

Route::group(['prefix' => '/taxes', 'middleware' => ['tenancy.register', 'bindings', 'cors']], function () {

    Route::get('apportionment-insurance/enum','AppontionmentInsuraceFreightTypesController@enum');
    Route::get('buyer-presences/enum', 'BuyerPresencesController@enum');
    Route::get('cfops/enum', 'CfopsController@enum');
    Route::get('csts/enum', 'CstsController@enum');
    Route::get('destination-operation-locals/enum', 'DestinationOperationLocalsController@enum');
    Route::get('freight-modes/enum', 'FreightModesController@enum');
    Route::get('goods-origins/enum', 'GoodsOriginsController@enum');
    Route::get('icms-bc-moodes/enum', 'IcmsBcModesController@enum');
    Route::get('icms-bc-st-moodes/enum', 'IcmsBcStModesController@enum');
    Route::get('icms-difal-percentages/enum', 'IcmsDifalPercentagesController@enum');
    Route::get('icms-reduction-reasons/enum', 'IcmsReductionReasonsController@enum');
    Route::get('invoice-emission-finalities/enum', 'InvoiceEmissionFinalitiesController@enum');
    Route::get('invoice-models/enum', 'InvoiceModelsController@enum');
    Route::get('invoice-print-types/enum', 'InvoicePrintTypesController@enum');
    Route::get('invoice-series/enum', 'InvoiceSeriesController@enum');
    Route::get('nature-operations/enum', 'NatureOperationsController@enum');
    Route::get('ncms/enum', 'NcmsController@enum');
    Route::get('taxes/enum', 'TaxesController@enum');
    Route::get('tax-frames/enum', 'TaxFramesController@enum');
    Route::get('tax-parametrizations/enum', 'TaxParametrizationsController@enum');
    Route::get('tax-regimes/enum', 'TaxRegimesController@enum');
    Route::get('tax-situations/enum', 'TaxSituationsController@enum');

    Route::apiResources([
        'apportionment-insurance' => 'AppontionmentInsuraceFreightTypesController',
        'buyer-presences' => 'BuyerPresencesController',
        'cfops' => 'CfopsController',
        'csts' => 'CstsController',
        'destination-operation-locals' => 'DestinationOperationLocalsController',
        'freight-modes' => 'FreightModesController',
        'goods-origins' => 'GoodsOriginsController',
        'icms-bc-moodes' => 'IcmsBcModesController',
        'icms-bc-st-moodes' => 'IcmsBcStModesController',
        'icms-difal-percentages' => 'IcmsDifalPercentagesController',
        'icms-reduction-reasons' => 'IcmsReductionReasonsController',
        'invoice-emission-finalities' => 'InvoiceEmissionFinalitiesController',
        'invoice-models' => 'InvoiceModelsController',
        'invoice-print-types' => 'InvoicePrintTypesController',
        'invoice-series' => 'InvoiceSeriesController',
        'nature-operations' => 'NatureOperationsController',
        'nature-operation-types' => 'NatureOperationTypesController',
        'ncms' => 'NcmsController',
        'taxes' => 'TaxesController',
        'tax-frames' => 'TaxFramesController',
        'tax-parametrizations' => 'TaxParametrizationsController',
        'tax-regimes' => 'TaxRegimesController',
        'tax-situations' => 'TaxSituationsController',
    ]);

});