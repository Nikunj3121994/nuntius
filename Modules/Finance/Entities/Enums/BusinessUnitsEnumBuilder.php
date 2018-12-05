<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 15:46
 */

namespace Modules\Finance\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Finance\Entities\BusinessUnit;

/**
 * Class BusinessUnitsEnumBuilder
 * @package Modules\Finance\Entities\Enums
 */
class BusinessUnitsEnumBuilder extends EnumBuilder
{

    /**
     * BusinessUnitsEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new BusinessUnit(), $request, collect([
            'table' => 'unidade_negocio',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'unidade_negocio',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}