<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 16:36
 */

namespace Modules\Stock\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Stock\Entities\MeasurementUnit;

/**
 * Class MeasurementUnitEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class MeasurementUnitEnumBuilder extends EnumBuilder
{

    /**
     * MeasurementUnitEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new MeasurementUnit(), $request, collect([
            'table' => 'unidade_medida',
            'text' => 'nome',
            'sub_text' => 'acronimo',
            'filters' => [
                [
                    'table' => 'unidade_medida',
                    'field' => 'nome'
                ],
                [
                    'table' => 'unidade_medida',
                    'field' => 'acronimo'
                ],
            ],
        ])->recursive());
    }
}