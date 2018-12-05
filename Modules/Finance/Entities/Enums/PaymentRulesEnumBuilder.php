<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 16:50
 */

namespace Modules\Finance\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Finance\Entities\PaymentRule;

/**
 * Class PaymentRulesEnumBuilder
 * @package Modules\Finance\Entities\Enums
 */
class PaymentRulesEnumBuilder extends EnumBuilder
{

    /**
     * PaymentRulesEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new PaymentRule(), $request, collect([
            'table' => 'condicao_pagamento',
            'text' => 'nome',
            'sub_text' => 'descricao',
            'filters' => [
                [
                    'table' => 'condicao_pagamento',
                    'field' => 'nome'
                ],
                [
                    'table' => 'condicao_pagamento',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }


}