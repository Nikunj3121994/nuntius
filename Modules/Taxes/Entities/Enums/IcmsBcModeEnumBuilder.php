<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:12
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\IcmsBcMode;

/**
 * Class IcmsBcModeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class IcmsBcModeEnumBuilder extends EnumBuilder
{

    /**
     * IcmsBcModeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new IcmsBcMode(), $request, collect([
            'table' => 'icms_bc_modalidade',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'icms_bc_modalidade',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}