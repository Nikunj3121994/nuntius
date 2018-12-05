<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:07
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\GoodsOrigin;

/**
 * Class GoodsOriginEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class GoodsOriginEnumBuilder extends EnumBuilder
{

    /**
     * GoodsOriginEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new GoodsOrigin(), $request, collect([
            'table' => 'origem_mercadoria',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'origem_mercadoria',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}