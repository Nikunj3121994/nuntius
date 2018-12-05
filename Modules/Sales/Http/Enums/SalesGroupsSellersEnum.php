<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 16:24
 */

namespace Modules\Sales\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Sales\Entities\Enums\SalesGroupSellerEnumBuilder;
use Modules\Sales\Entities\SalesGroupSeller;

/**
 * Trait SalesGroupsSellersEnum
 * @package Modules\Sales\Http\Enums
 */
trait SalesGroupsSellersEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new SalesGroupSellerEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

    /**
     * @param SalesGroupSeller $salesGroupSeller
     * @return JsonResponse
     */
    public function getComissionPercent(SalesGroupSeller $salesGroupSeller): JsonResponse
    {
        return JsonResponse::create(['percent' => floatval($salesGroupSeller->percentual_comissao)]);
    }

}