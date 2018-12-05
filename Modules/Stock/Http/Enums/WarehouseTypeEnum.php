<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 08:47
 */

namespace Modules\Stock\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Enums\WarehouseTypeEnumBuilder;

/**
 * Trait WarehouseTypeEnum
 * @package Modules\Stock\Http\Enums
 */
trait WarehouseTypeEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new WarehouseTypeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}