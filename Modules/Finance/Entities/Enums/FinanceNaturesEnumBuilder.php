<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 16:23
 */

namespace Modules\Finance\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Finance\Entities\FinanceNature;

/**
 * Class FinanceNatureEnumBuilder
 * @package Modules\Finance\Entities\Enums
 */
class FinanceNaturesEnumBuilder extends EnumBuilder
{

    /**
     * FinanceNatureEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {

        $metaData = collect([
            'table' => 'natureza_financeira',
            'text' => 'nome',
            'sub_text' => 'codigo',
            'filters' => [
                [
                    'table' => 'natureza_financeira',
                    'field' => 'nome'
                ],
                [
                    'table' => 'natureza_financeira',
                    'field' => 'codigo'
                ],
            ],
            'default_filter' => [
                "natureza_financeira.tipo_nodo = 'A'",
            ],
        ])->recursive();

        if ($request->has('type')) {
            $metaData->push(collect([
                'default_filter' => [
                    "centro_custo.tipo = '{$request->input('type')}'",
                ]
            ])->recursive());
        }
        parent::__construct(new FinanceNature(), $request, $metaData);
    }

}