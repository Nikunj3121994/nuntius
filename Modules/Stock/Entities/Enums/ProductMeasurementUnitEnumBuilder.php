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
use Modules\Stock\Entities\Product;
use Modules\Stock\Entities\ProductMeasurementUnit;

/**
 * Class ProductMeasurementUnitEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class ProductMeasurementUnitEnumBuilder extends EnumBuilder
{

    /**
     * ProductMeasurementUnitEnumBuilder constructor.
     * @param Request $request
     * @param Product $product
     */
    public function __construct( Request $request, Product $product )
    {
        parent::__construct(new ProductMeasurementUnit(), $request, collect([
            'table' => 'produto_unidade_medida',
            'text' => 'unidade_medida.nome',
            'sub_text' => 'unidade_medida.acronimo',
            'join' => [
                [
                    'table' => 'unidade_medida',
                    'foreign_key' => 'unidade_medida_id',
                ],
            ],
            'filters' => [
                [
                    'table' => 'unidade_medida',
                    'field' => 'nome'
                ],
                [
                    'table' => 'unidade_medida',
                    'field' => 'acronimo'
                ],
            ],
            'default_filter' => [
                "produto_unidade_medida.produto_id = {$product->id}"
            ]
        ])->recursive());
    }
}