<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 16:36
 */

namespace Modules\Stock\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Stock\Entities\ProductCategory;

/**
 * Class ProductCategoryEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class ProductCategoryEnumBuilder extends EnumBuilder
{

    /**
     * ProductCategoryEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new ProductCategory(), $request, collect([
            'table' => 'produto_categoria',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'produto_categoria',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}