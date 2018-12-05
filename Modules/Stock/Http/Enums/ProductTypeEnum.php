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
use Modules\Stock\Entities\Enums\ProductTypeEnumBuilder;

/**
 * Trait ProductTypeEnum
 * @package Modules\Stock\Http\Enums
 */
trait ProductTypeEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new ProductTypeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}