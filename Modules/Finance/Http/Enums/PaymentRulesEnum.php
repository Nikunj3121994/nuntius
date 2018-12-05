<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:20
 */

namespace Modules\Finance\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Finance\Entities\Enums\PaymentRulesEnumBuilder;

/**
 * Trait PaymentRulesEnum
 * @package Modules\Finance\Http\Enums
 */
trait PaymentRulesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new PaymentRulesEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}