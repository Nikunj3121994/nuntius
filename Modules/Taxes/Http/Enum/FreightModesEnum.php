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
use Modules\Taxes\Entities\Enums\FreightModeEnumBuilder;

/**
 * Trait FreightModesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait FreightModesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new FreightModeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}