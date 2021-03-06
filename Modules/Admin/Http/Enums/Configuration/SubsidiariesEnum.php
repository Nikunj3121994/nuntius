<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 10:00
 */

namespace Modules\Admin\Http\Enums\Configuration;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\Company;
use Modules\Admin\Enums\Configuration\SubsidiaryEnumBuilder;

/**
 * Trait SubsidiariesEnum
 * @package Modules\Admin\Http\Enums
 */
trait SubsidiariesEnum
{

    /**
     * @param Request $request
     * @param Company $company
     * @return JsonResponse
     */
    public function enum( Request $request, Company $company ): JsonResponse
    {
        $enum = new SubsidiaryEnumBuilder($request, $company);
        return JsonResponse::create($enum->make()->toArray());
    }

}