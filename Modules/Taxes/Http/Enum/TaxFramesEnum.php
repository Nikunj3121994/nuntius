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
use Modules\Taxes\Entities\Enums\TaxFrameEnumBuilder;

/**
 * Trait TaxFramesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait TaxFramesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new TaxFrameEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}