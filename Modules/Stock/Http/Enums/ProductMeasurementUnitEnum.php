<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 08:45
 */

namespace Modules\Stock\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Enums\ProductMeasurementUnitEnumBuilder;
use Modules\Stock\Entities\Product;

trait ProductMeasurementUnitEnum
{

    /**
     * @param Request $request
     * @param Product $product
     * @return JsonResponse
     */
    public function enum( Request $request, Product $product ): JsonResponse
    {
        $enum = new ProductMeasurementUnitEnumBuilder($request, $product);
        return JsonResponse::create($enum->make()->toArray());
    }

}