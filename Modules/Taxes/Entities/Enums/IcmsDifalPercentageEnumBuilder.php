<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:16
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\IcmsDifalPercentage;

/**
 * Class IcmsDifalPercentageEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class IcmsDifalPercentageEnumBuilder extends EnumBuilder
{

    /**
     * IcmsDifalPercentageEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new IcmsDifalPercentage(), $request, collect([
            'table' => 'icms_difal_percentual',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'icms_difal_percentual',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}