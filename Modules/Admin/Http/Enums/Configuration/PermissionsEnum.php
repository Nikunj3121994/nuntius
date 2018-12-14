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
use Modules\Admin\Enums\Configuration\PermissionEnumBuilder;

/**
 * Trait PermissionsEnum
 * @package Modules\Admin\Http\Enums\Configuration
 */
trait PermissionsEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new PermissionEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}