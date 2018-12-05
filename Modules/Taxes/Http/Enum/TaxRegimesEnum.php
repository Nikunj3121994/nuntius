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
use Modules\Taxes\Entities\Enums\TaxRegimeEnumBuilder;

/**
 * Trait TaxRegimesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait TaxRegimesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new TaxRegimeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}