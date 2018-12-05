<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 14:43
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Cst;
use Modules\Taxes\Entities\Tax;

/**
 * Class CstEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class CstEnumBuilder extends EnumBuilder
{

    /**
     * CstEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request, Tax $tax )
    {
        parent::__construct(new Cst(), $request, collect([
            'table' => 'cst',
            'text' => 'codigo_cst',
            'filters' => [
                [
                    'table' => 'cst',
                    'field' => 'codigo_cst'
                ],
            ],
            'default_filter' => [
                "imposto_id = {$tax->id}",
            ],
        ])->recursive());
    }
}