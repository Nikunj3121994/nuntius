<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:46
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\InvoicePrintTypeEnumBuilder;

/**
 * Trait InvoicePrintTypesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait InvoicePrintTypesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new InvoicePrintTypeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}