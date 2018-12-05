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
use Modules\Finance\Entities\Enums\PaymentMeansEnumBuilder;

/**
 * Trait PaymentMeansEnum
 * @package Modules\Finance\Http\Enums
 */
trait PaymentMeansEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new PaymentMeansEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}