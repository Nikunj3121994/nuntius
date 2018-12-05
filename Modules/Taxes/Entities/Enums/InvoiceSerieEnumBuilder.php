<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:36
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\InvoiceSerie;

/**
 * Class InvoiceSerieEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class InvoiceSerieEnumBuilder extends EnumBuilder
{

    /**
     * InvoiceSerieEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new InvoiceSerie(), $request, collect([
            'table' => 'nota_fiscal_serie',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'nota_fiscal_serie',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }

}