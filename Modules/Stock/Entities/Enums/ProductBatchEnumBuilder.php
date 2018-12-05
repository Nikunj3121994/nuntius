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
use Modules\Stock\Entities\Product;
use Modules\Stock\Entities\ProductBatch;

/**
 * Class ProductBatchEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class ProductBatchEnumBuilder extends EnumBuilder
{

    /**
     * ProductBatchEnumBuilder constructor.
     * @param Request $request
     * @param Product $product
     */
    public function __construct( Request $request, Product $product )
    {
        parent::__construct(new ProductBatch(), $request, collect([
            'table' => 'produto_lote',
            'text' => 'descricao',
            'sub_text' => 'vencimento',
            'filters' => [
                [
                    'table' => 'produto_lote',
                    'field' => 'descricao'
                ],
                [
                    'table' => 'produto_lote',
                    'field' => 'identificacao'
                ],
            ],
            'default_filter' => [
                "produto_id = {$product->id}"
            ]
        ])->recursive());
    }
}