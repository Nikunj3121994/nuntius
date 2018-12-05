<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 15:35
 */

namespace Modules\Sales\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Sales\Entities\PriceTable;

/**
 * Class PriceTableEnumBuilder
 * @package Modules\Sales\Entities\Enums
 */
class PriceTableEnumBuilder extends EnumBuilder
{

    /**
     * MarkupVariableEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request)
    {
        parent::__construct(new PriceTable(), $request, collect([
            'table' => 'tabela_preco',
            'text' => 'nome',
            'sub_text' => 'descricao',
            'filters' => [
                [
                    'table' => 'tabela_preco',
                    'field' => 'nome'
                ],
                [
                    'table' => 'tabela_preco',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}