<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:18
 */

namespace Modules\Finance\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Finance\Entities\Enums\BusinessUnitsEnumBuilder;

/**
 * Trait BusinessUnitsEnum
 * @package Modules\Finance\Http\Enums
 */
trait BusinessUnitsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new BusinessUnitsEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}