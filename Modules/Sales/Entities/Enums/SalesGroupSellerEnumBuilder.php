<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 15:37
 */

namespace Modules\Sales\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Sales\Entities\SalesGroupSeller;

/**
 * Class SalesGroupSellerEnumBuilder
 * @package Modules\Sales\Entities\Enums
 */
class SalesGroupSellerEnumBuilder extends EnumBuilder
{

    /**
     * SalesGroupSellerEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new SalesGroupSeller(), $request, collect([
            'table' => 'grupo_venda_representante',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'grupo_venda_representante',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}