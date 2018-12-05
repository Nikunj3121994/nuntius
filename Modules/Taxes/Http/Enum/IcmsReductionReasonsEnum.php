<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:44
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\IcmsReductionReasonEnumBuilder;

/**
 * Trait IcmsReductionReasonsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait IcmsReductionReasonsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new IcmsReductionReasonEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}