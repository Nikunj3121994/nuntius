<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:58
 */

namespace Modules\Admin\Http\Enums\Configuration;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Enums\Configuration\CompanyEnumBuilder;

/**
 * Trait CompaniesEnum
 * @package Modules\Admin\Http\Enums
 */
trait CompaniesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new CompanyEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}