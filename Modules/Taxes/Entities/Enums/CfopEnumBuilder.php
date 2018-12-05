<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 14:39
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Cfop;

/**
 * Class CfopEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class CfopEnumBuilder extends EnumBuilder
{

    /**
     * CfopEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Cfop(), $request, collect([
            'table' => 'cfop',
            'text' => 'codigo',
            'sub_text' => 'nome',
            'filters' => [
                [
                    'table' => 'cfop',
                    'field' => 'codigo'
                ],
                [
                    'table' => 'cfop',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}