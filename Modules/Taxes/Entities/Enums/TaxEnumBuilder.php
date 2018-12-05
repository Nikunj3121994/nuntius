<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:07
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Tax;

/**
 * Class TaxEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class TaxEnumBuilder extends EnumBuilder
{

    /**
     * TaxEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Tax(), $request, collect([
            'table' => 'imposto',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'imposto',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}