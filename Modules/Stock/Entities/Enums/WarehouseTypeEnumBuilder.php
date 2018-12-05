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
use Modules\Stock\Entities\WarehouseType;

/**
 * Class WarehouseTypeEnumBuilder
 * @package Modules\Stock\Entities\Enums
 */
class WarehouseTypeEnumBuilder extends EnumBuilder
{

    /**
     * WarehouseTypeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new WarehouseType(), $request, collect([
            'table' => 'armazem_tipo',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'armazem_tipo',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}