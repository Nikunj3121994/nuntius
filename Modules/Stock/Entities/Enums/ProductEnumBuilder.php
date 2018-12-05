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

/**
 * Class ProductEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class ProductEnumBuilder extends EnumBuilder
{

    /**
     * ProductEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Product(), $request, collect([
            'table' => 'produto',
            'text' => 'descricao',
            'sub_text' => 'referencia',
            'filters' => [
                [
                    'table' => 'produto',
                    'field' => 'descricao'
                ],
                [
                    'table' => 'produto',
                    'field' => 'referencia'
                ],
            ],
        ])->recursive());
    }
}