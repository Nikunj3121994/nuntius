<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 15:55
 */

namespace Modules\Admin\Enums\Parametrizations;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Parametrizations\RoutineEvent;

/**
 * Class RoutineEventEnumBuilder
 * @package Modules\Admin\Enums\Parametrizations
 */
class RoutineEventEnumBuilder extends EnumBuilder
{

    /**
     * SubsidiaryParameterEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new RoutineEvent(), $request, collect([
            'table' => 'evento_rotina',
            'text' => 'nome',
            'sub_text' => 'descricao',
            'filters' => [
                [
                    'table' => 'evento_rotina',
                    'field' => 'nome'
                ],
                [
                    'table' => 'evento_rotina',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}