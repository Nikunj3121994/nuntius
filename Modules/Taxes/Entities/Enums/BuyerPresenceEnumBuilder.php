<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 14:38
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\BuyerPresence;

/**
 * Class BuyerPresenceEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class BuyerPresenceEnumBuilder extends EnumBuilder
{

    /**
     * BuyerPresenceEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new BuyerPresence(), $request, collect([
            'table' => 'presenca_comprador',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'presenca_comprador',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}