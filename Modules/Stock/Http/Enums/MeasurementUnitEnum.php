<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 08:42
 */

namespace Modules\Stock\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Enums\MeasurementUnitEnumBuilder;

/**
 * Trait MeasurementUnitEnum
 * @package Modules\Stock\Http\Enums
 */
trait MeasurementUnitEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new MeasurementUnitEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}