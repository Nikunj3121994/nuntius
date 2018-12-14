<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:43
 */

namespace Modules\Admin\Enums\Registers;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Registers\State;

/**
 * Class StateEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class StateEnumBuilder extends EnumBuilder
{

    /**
     * StateEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new State(), $request, collect([
            'table' => 'estado',
            'text' => 'descricao',
            'sub_text' => 'sigla_uf',
            'filters' => [
                [
                    'table' => 'estado',
                    'field' => 'descricao'
                ],
                [
                    'table' => 'estado',
                    'field' => 'sigla_uf'
                ],
            ],
        ])->recursive());
    }
}