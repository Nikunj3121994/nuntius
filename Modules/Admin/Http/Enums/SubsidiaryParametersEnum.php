<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 10:00
 */

namespace Modules\Admin\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Enums\SubsidiaryParameterEnumBuilder;
use Modules\Admin\Entities\Subsidiary;

/**
 * Trait SubsidiaryParametersEnum
 * @package Modules\Admin\Http\Enums
 */
trait SubsidiaryParametersEnum
{

    /**
     * @param Request $request
     * @param Subsidiary $subsidiary
     * @return JsonResponse
     */
    public function enum( Request $request, Subsidiary $subsidiary ): JsonResponse
    {
        $enum = new SubsidiaryParameterEnumBuilder($request,$subsidiary);
        return JsonResponse::create($enum->make()->toArray());
    }

}