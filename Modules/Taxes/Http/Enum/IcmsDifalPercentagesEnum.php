<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:43
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\IcmsDifalPercentageEnumBuilder;

/**
 * Trait IcmsDifalPercentagesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait IcmsDifalPercentagesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new IcmsDifalPercentageEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}