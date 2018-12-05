<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:39
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\CstEnumBuilder;
use Modules\Taxes\Entities\Tax;

/**
 * Trait CstsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait CstsEnum
{

    /**
     * @param Request $request
     * @param Tax $tax
     * @return JsonResponse
     */
    public function enum( Request $request, Tax $tax ): JsonResponse
    {
        $enum = new CstEnumBuilder($request,$tax);
        return JsonResponse::create($enum->make()->toArray());
    }

}