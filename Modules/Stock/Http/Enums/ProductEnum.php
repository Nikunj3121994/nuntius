<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 08:44
 */

namespace Modules\Stock\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Enums\ProductEnumBuilder;

/**
 * Trait ProductEnum
 * @package Modules\Stock\Http\Enums
 */
trait ProductEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new ProductEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}