<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 15:49
 */

namespace Modules\Sales\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Sales\Entities\Entity;
use Modules\Sales\Entities\Enums\EntityAddressEnumBuilder;

/**
 * Trait EntityAdressesEnum
 * @package Modules\Sales\Http\Enums
 */
trait EntityAdressesEnum
{

    /**
     * @param Request $request
     * @param Entity $entity
     * @return JsonResponse
     */
    public function enum( Request $request, Entity $entity ): JsonResponse
    {
        $enum = new EntityAddressEnumBuilder($request, $entity);
        return JsonResponse::create($enum->make()->toArray());
    }
}