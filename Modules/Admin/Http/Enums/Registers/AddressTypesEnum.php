<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:58
 */

namespace Modules\Admin\Http\Enums\Registers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Enums\Registers\AddressTypeEnumBuilder;

/**
 * Trait AddressTypesEnum
 * @package Modules\Admin\Http\Enums
 */
trait AddressTypesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new AddressTypeEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}