<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 08:43
 */

namespace Modules\Stock\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Enums\ProductBatchEnumBuilder;
use Modules\Stock\Entities\Product;

/**
 * Trait ProductBatchEnum
 * @package Modules\Stock\Http\Enums
 */
trait ProductBatchEnum
{

    /**
     * @param Request $request
     * @param Product $product
     * @return JsonResponse
     */
    public function enum( Request $request, Product $product ): JsonResponse
    {
        $enum = new ProductBatchEnumBuilder($request, $product);
        return JsonResponse::create($enum->make()->toArray());
    }

}