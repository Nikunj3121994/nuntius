<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:13
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\TaxParametrization;

/**
 * Class TaxParametrizationEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class TaxParametrizationEnumBuilder extends EnumBuilder
{

    /**
     * TaxParametrizationEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new TaxParametrization(), $request, collect([
            'table' => 'parametrizacao_fiscal',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'parametrizacao_fiscal',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}