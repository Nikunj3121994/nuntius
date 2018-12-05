<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:41
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\IcmsBcModeEnumBuilder;

/**
 * Trait IcmsBcModesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait IcmsBcModesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new IcmsBcModeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}