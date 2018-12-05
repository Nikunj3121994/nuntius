<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:34
 */

namespace Modules\Taxes\Http\Enum;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Enums\BuyerPresenceEnumBuilder;

/**
 * Trait BuyerPresencesEnum
 * @package Modules\Taxes\Http\Enum
 */
trait BuyerPresencesEnum
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function enum( Request $request ): JsonResponse
    {
        $enum = new BuyerPresenceEnumBuilder($request);
        return JsonResponse::create($enum->make()->toArray());
    }

}