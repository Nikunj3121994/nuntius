<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 15:01
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\FreightMode;

/**
 * Class FreightModeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class FreightModeEnumBuilder extends EnumBuilder
{

    /**
     * FreightModeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new FreightMode(), $request, collect([
            'table' => 'modalidade_frete',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'modalidade_frete',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}