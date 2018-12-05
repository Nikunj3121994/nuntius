<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:58
 */

namespace Modules\Admin\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Enums\CityEnumBuilder;
use Modules\Admin\Entities\State;

/**
 * Trait CitiesEnum
 * @package Modules\Admin\Http\Enums
 */
trait CitiesEnum
{

    /**
     * @param Request $request
     * @param State $state
     * @return JsonResponse
     */
    public function enum( Request $request, State $state ): JsonResponse
    {
        $enum = new CityEnumBuilder($request, $state);
        return JsonResponse::create($enum->make()->toArray());
    }
}