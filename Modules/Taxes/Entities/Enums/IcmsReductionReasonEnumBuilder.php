<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:19
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\IcmsReductionReason;

/**
 * Class IcmsReductionReasonEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class IcmsReductionReasonEnumBuilder extends EnumBuilder
{

    /**
     * IcmsReductionReasonEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new IcmsReductionReason(), $request, collect([
            'table' => 'icms_razao_reducao',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'icms_razao_reducao',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}