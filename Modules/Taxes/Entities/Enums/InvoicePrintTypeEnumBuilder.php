<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:31
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\InvoicePrintType;

/**
 * Class InvoicePrintTypeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class InvoicePrintTypeEnumBuilder extends EnumBuilder
{

    /**
     * InvoicePrintTypeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new InvoicePrintType(), $request, collect([
            'table' => 'tipo_impressao_danfe',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'tipo_impressao_danfe',
                    'field' => 'nome',
                ],
            ],
        ])->recursive());
    }

}