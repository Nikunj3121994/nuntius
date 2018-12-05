<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:47
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\TaxEnumBuilder;

/**
 * Trait TaxesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait TaxesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new TaxEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}