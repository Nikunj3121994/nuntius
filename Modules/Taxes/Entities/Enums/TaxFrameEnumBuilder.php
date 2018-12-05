<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:10
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\TaxFrame;

/**
 * Class TaxFrameEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class TaxFrameEnumBuilder extends EnumBuilder
{

    /**
     * TaxFrameEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new TaxFrame(), $request, collect([
            'table' => 'imposto_enquadramento',
            'text' => 'descricao_codigo',
            'filters' => [
                [
                    'table' => 'imposto_enquadramento',
                    'field' => 'descricao_codigo'
                ],
            ],
        ])->recursive());
    }
}