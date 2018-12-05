<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 15:30
 */

namespace Modules\Sales\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Sales\Entities\MarkupVariable;

/**
 * Class MarkupVariableEnumBuilder
 * @package Modules\Sales\Entities\Enums
 */
class MarkupVariableEnumBuilder extends EnumBuilder
{

    /**
     * MarkupVariableEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request)
    {
        parent::__construct(new MarkupVariable(), $request, collect([
            'table' => 'variavel_markup',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'variavel_markup',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}