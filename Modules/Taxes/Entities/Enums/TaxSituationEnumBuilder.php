<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:29
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\TaxSituation;

/**
 * Class TaxSituationEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class TaxSituationEnumBuilder extends EnumBuilder
{

    /**
     * TaxSituationEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new TaxSituation(), $request, collect([
            'table' => 'situacao_fiscal',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'situacao_fiscal',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }

}