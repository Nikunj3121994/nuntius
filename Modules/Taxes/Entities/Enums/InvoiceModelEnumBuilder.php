<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:24
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\InvoiceModel;

/**
 * Class InvoiceModelEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class InvoiceModelEnumBuilder extends EnumBuilder
{

    /**
     * InvoiceModelEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new InvoiceModel(), $request, collect([
            'table' => 'nota_fiscal_modelo',
            'text' => 'nome',
            'sub_text' => 'smarter_codigo',
            'filters' => [
                [
                    'table' => 'nota_fiscal_modelo',
                    'field' => 'nome'
                ],
                [
                    'table' => 'nota_fiscal_modelo',
                    'field' => 'smarter_codigo'
                ],
            ],
        ])->recursive());
    }

}