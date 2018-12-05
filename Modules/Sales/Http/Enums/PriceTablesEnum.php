<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 16:15
 */

namespace Modules\Sales\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Sales\Entities\Enums\PriceTableEnumBuilder;

/**
 * Trait PriceTablesEnum
 * @package Modules\Sales\Http\Enums
 */
trait PriceTablesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new PriceTableEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}