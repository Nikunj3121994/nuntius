<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 16:44
 */

namespace Modules\Finance\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Finance\Entities\PaymentMean;

/**
 * Class PaymentMeansEnumBuilder
 * @package Modules\Finance\Entities\Enums
 */
class PaymentMeansEnumBuilder extends EnumBuilder
{

    /**
     * PaymentMeansEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new PaymentMean(), $request, collect([
            'table' => 'forma_pagamento',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'forma_pagamento',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}