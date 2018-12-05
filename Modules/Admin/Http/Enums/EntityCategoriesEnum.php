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
use Modules\Admin\Entities\Enums\EntityCategoryEnumBuilder;

/**
 * Trait EntityCategoriesEnum
 * @package Modules\Admin\Http\Enums
 */
trait EntityCategoriesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new EntityCategoryEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}