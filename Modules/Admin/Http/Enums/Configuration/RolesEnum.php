<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 14/12/2018
 * Time: 09:28
 */

namespace Modules\Admin\Http\Enums\Configuration;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Enums\Configuration\RoleEnumBuilder;

/**
 * Trait RolesEnum
 * @package Modules\Admin\Http\Enums\Configuration
 */
trait RolesEnum
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new RoleEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }
}