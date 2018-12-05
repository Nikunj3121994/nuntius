<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:23
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\TaxRegime;

/**
 * Class TaxRegimeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class TaxRegimeEnumBuilder extends EnumBuilder
{

    /**
     * TaxRegimeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new TaxRegime(), $request, collect([
            'table' => 'regime_tributario',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'regime_tributario',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }

}