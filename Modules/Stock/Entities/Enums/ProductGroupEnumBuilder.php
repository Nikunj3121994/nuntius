<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 16:37
 */

namespace Modules\Stock\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Stock\Entities\ProductGroup;

/**
 * Class ProductGroupEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class ProductGroupEnumBuilder extends EnumBuilder
{

    /**
     * ProductGroupEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new ProductGroup(), $request, collect([
            'table' => 'grupo_produto',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'grupo_produto',
                    'field' => 'nome'
                ],
            ],
            'default_filter' => [
                "grupo_produto_id is not null"
            ]
        ])->recursive());
    }
}