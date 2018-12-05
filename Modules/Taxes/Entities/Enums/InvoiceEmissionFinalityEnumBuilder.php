<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:21
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\InvoiceEmissionFinality;

/**
 * Class InvoiceEmissionFinalityEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class InvoiceEmissionFinalityEnumBuilder extends EnumBuilder
{

    /**
     * InvoiceEmissionFinalityEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new InvoiceEmissionFinality(), $request, collect([
            'table' => 'nota_fiscal_finalidade_emissao',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'nota_fiscal_finalidade_emissao',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}