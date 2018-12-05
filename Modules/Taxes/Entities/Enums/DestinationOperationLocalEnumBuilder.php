<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 14:59
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\DestinationOperationLocal;

/**
 * Class DestinationOperationLocalEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class DestinationOperationLocalEnumBuilder extends EnumBuilder
{

    /**
     * DestinationOperationLocalEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new DestinationOperationLocal(), $request, collect([
            'table' => 'local_destino_operacao',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'local_destino_operacao',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}