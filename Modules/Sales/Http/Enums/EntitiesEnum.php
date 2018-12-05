<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 15:45
 */

namespace Modules\Sales\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Sales\Entities\Enums\EntityEnumBuilder;


trait EntitiesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new EntityEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}