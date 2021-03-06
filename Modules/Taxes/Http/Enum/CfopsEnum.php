<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:37
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\CfopEnumBuilder;

/**
 * Trait CfopsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait CfopsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new CfopEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}