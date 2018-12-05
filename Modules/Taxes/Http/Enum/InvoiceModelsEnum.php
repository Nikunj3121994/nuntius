<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:45
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\InvoiceModelEnumBuilder;

/**
 * Trait InvoiceModelsEnum
 * @package Modules\Taxes\Http\Enum
 */
trait InvoiceModelsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new InvoiceModelEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}