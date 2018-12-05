<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 15:44
 */

namespace Modules\Finance\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Finance\Entities\CostCenter;

/**
 * Class CostCentersEnumBuilder
 * @package Modules\Finance\Entities\Enums
 */
class CostCentersEnumBuilder extends EnumBuilder
{

    /**
     * CostCentersEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {

        $metaData = collect([
            'table' => 'centro_custo',
            'text' => 'nome',
            'sub_text' => 'codigo',
            'filters' => [
                [
                    'table' => 'centro_custo',
                    'field' => 'nome'
                ],
                [
                    'table' => 'centro_custo',
                    'field' => 'codigo'
                ],
            ],
            'default_filter' => [
                "centro_custo.tipo_nodo = 'A'",
            ],
        ])->recursive();

        parent::__construct(new CostCenter(), $request, $metaData);
    }


}