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
use Modules\Stock\Entities\ProductType;

/**
 * Class ProductTypeEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class ProductTypeEnumBuilder extends EnumBuilder
{

    public function __construct( Request $request )
    {
        parent::__construct(new ProductType(), $request, collect([
            'table' => 'produto_tipo',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'produto_tipo',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}