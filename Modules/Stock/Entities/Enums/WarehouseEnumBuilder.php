<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 16:38
 */

namespace Modules\Stock\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Stock\Entities\Warehouse;

/**
 * Class WarehouseEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class WarehouseEnumBuilder extends EnumBuilder
{

    /**
     * WarehouseEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Warehouse(), $request, collect([
            'table' => 'armazem',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'armazem',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}