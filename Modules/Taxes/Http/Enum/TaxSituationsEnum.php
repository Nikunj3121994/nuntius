<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:49
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\TaxSituationEnumBuilder;

/**
 * Trait TaxSituationsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait TaxSituationsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new TaxSituationEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}