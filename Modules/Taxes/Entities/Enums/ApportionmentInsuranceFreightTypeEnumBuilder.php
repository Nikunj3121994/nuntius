<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 14:34
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\ApportionmentInsuranceFreitghtType;

/**
 * Class ApportionmentInsuranceFreightTypeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class ApportionmentInsuranceFreightTypeEnumBuilder extends EnumBuilder
{

    /**
     * ApportionmentInsuranceFreightTypeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new ApportionmentInsuranceFreitghtType(), $request, collect([
            'table' => 'tipo_rateio_seguro_frete',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'tipo_rateio_seguro_frete',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}