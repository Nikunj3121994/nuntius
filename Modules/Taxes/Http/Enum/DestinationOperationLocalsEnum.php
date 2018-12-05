<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:40
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\DestinationOperationLocalEnumBuilder;

/**
 * Trait DestinationOperationLocalsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait DestinationOperationLocalsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new DestinationOperationLocalEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}