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
use Modules\Stock\Entities\Enums\ProductCategoryEnumBuilder;

/**
 * Trait ProductCategoryEnum
 * @package Modules\Stock\Http\Enums
 */
trait ProductCategoryEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new ProductCategoryEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}