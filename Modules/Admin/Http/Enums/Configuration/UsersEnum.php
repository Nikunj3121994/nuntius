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
use Modules\Admin\Enums\Configuration\UserEnumBuilder;

/**
 * Trait UsersEnum
 * @package Modules\Admin\Http\Enums\Configuration
 */
trait UsersEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new UserEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}