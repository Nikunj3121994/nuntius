<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:42
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\IcmsBcStModeEnumBuilder;

/**
 * Trait IcmsBcStModesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait IcmsBcStModesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new IcmsBcStModeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}