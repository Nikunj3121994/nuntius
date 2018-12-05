<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:13
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\IcmsBcStMode;

/**
 * Class IcmsBcStModeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class IcmsBcStModeEnumBuilder extends EnumBuilder
{

    /**
     * IcmsBcStModeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new IcmsBcStMode(), $request, collect([
            'table' => 'icms_bc_st_modalidade',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'icms_bc_st_modalidade',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}