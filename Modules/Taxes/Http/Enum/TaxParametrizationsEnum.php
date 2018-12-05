<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:48
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\TaxParametrizationEnumBuilder;

/**
 * Trait TaxParametrizationsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait TaxParametrizationsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new TaxParametrizationEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}