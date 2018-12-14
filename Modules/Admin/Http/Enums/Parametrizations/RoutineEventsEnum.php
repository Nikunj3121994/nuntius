<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 14/12/2018
 * Time: 09:31
 */

namespace Modules\Admin\Http\Enums\Parametrizations;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Enums\Parametrizations\RoutineEventEnumBuilder;

/**
 * Trait RoutineEventsEnum
 * @package Modules\Admin\Http\Enums\Parametrizations
 */
trait RoutineEventsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new RoutineEventEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}