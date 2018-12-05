<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:59
 */

namespace Modules\Admin\Http\Enums;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Enums\CountryEnumBuilder;

/**
 * Trait CountriesEnum
 * @package Modules\Admin\Http\Enums
 */
trait CountriesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new CountryEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}