<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:19
 */

namespace Modules\Finance\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Finance\Entities\Enums\FinanceNaturesEnumBuilder;

/**
 * Trait FinanceNaturesEnum
 * @package Modules\Finance\Http\Enums
 */
trait FinanceNaturesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new FinanceNaturesEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}