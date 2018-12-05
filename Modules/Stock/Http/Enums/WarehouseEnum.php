<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 08:46
 */

namespace Modules\Stock\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Enums\WarehouseEnumBuilder;

/**
 * Trait WarehouseEnum
 * @package Modules\Stock\Http\Enums
 */
trait WarehouseEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new WarehouseEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}